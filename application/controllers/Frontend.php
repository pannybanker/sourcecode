<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'libraries/Stripe/lib/Stripe.php');

class Frontend extends Clients_controller {

    function __construct() {
        parent::__construct();
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-validation">', '</div>');
        $this->load->model('cart_model');
        $this->load->model('frontend_model');
        $this->load->model('User_model');
    }

    public function process() {
        try {


            Stripe::setApiKey('sk_test_znA0WzydAohOE67ARcbmkyHr');
            $charge = Stripe_Charge::create(array(
                        "amount" => ceil($_POST['pamount']) . '00',
                        "currency" => "USD",
                        "card" => $this->input->post('access_token'),
                        "description" => "Stripe Payment"
            ));
            if ($charge->id) {
                foreach ($_POST['user'] as $key => $value) {
                    $insertData['user_id'] = $_SESSION['user']['user_id'];
                    $insertData['usermeta_metakey'] = $key;
                    $insertData['usermeta_value'] = $value;
                    $insertData['created_date'] = date('Y-m-d H:i:s');
                    $insertData['ipaddress'] = $_SERVER['REMOTE_ADDR'];
                    $this->User_model->deletemetadata($insertData['user_id'], $insertData['usermeta_metakey']);
                    $this->User_model->insertusermeta($insertData);
                }
            }
            $data = array(
                'pay_firstname' => $_POST['user']['firstname'],
                'pay_lastname' => $_POST['user']['lastname'],
                'pay_ddlcountry' => $_POST['user']['ddlcountry'],
                'pay_address' => $_POST['user']['address'],
                'pay_address2' => $_POST['user']['address2'],
                'pay_zipcode' => $_POST['user']['zipcode'],
                'pay_city' => $_POST['user']['city'],
                'pay_state' => $_POST['user']['state'],
                'pay_phone' => $_POST['user']['phone'],
                'pay_number' => $_POST['number'],
                'pay_exp_month' => $_POST['exp_month'],
                'pay_exp_year' => $_POST['exp_year'],
                'pay_address_zip' => $_POST['address_zip'],
                'pay_pname' => $_POST['pname'],
                'pay_access_token' => $_POST['access_token'],
                'pay_userid' => $_SESSION['user']['user_id'],
                'pay_packageid' => $_POST['pid'],
                'pay_baseprice' => $_POST['pamount'],
                'pay_paidamount' => ceil($_POST['pamount']),
                'pay_payment_id' => $charge->id,
                'pay_payment_status' => 'success',
                'pay_packege_period' => $_POST['packege_period'],
                'pay_businessplus' => $_POST['addon_business_plus'],
            );
            $data_status=array(
                'pay_current_status'=>0
            );
            $this->User_model->upgrade_package($data_status,$_SESSION['user']['user_id']);
            $response = $this->User_model->insertPackege($data);
            if ($response) {
                $config = Array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'mail.pennybanker.com',
                    'smtp_port' => 25,
                    'smtp_user' => 'noreply@pennybanker.com',
                    'smtp_pass' => 'M[SWg-MmJoeU',
                    'mailtype' => 'html',
                    'charset' => 'iso-8859-1',
                    'wordwrap' => TRUE
                );
                $this->load->library('email');

                $this->email->initialize($config);

                $this->email->from('noreply@pennybanker.com', 'Penny Banker');
                $this->email->to($_SESSION['user']['user_email'], $_SESSION['user']['user_name']);
                $this->email->cc('info@pennybanker.com', 'Penny Banker');
                $this->email->bcc('sharmahemant487@gmail.com', 'Hemant Sharma');
                $this->email->subject('Pennybanker:: Subscription Successfully by' . $_SESSION['user']['user_name'] . ' !');
                $message = '<img style="width:200px;" src="http://dedicatedresources.org/pennybanker/assets1/images/logo.png" alt="Penny Banker" /><br>';
                $message .= "<b>Thank you for Subscribe " . $_POST['pname'] . " Subscription with pennybanker</b><br>";
                $message .= "<b>Please check packege details below as follow :-</b><br><br>";
                $message .= "<pre><p>Name : " . $_POST['pname'] . "</p></pre>";
                $message .= "<pre><p>Paid Amount : $" . ceil($_POST['pamount']) . "</p></pre>";
                $message .= "<pre><p>Billing Amount : $" . $_POST['pamount'] . "</p></pre>";
                $message .= "<pre><p>Subscription Period : " . $_POST['packege_period'] . " month</p></pre>";
                $message .= "<pre><p>Payment Mode : Stripe Payment</p></pre>";
                $message .= "<pre><p>Payment Status : Success</p></pre>";
                $message .= "<pre><p>Transection ID : " . $charge->id . "</p></pre><br<br>";
                $message .= "<b>Thank you <br> PennyBanker</b>";

                $this->email->message($message);
                $this->email->send();
                echo json_encode(array('status' => 200, 'success' => 'Payment successfully completed.'));
                $_SESSION['user_package']['pay_packageid'] = $_POST['pid'];
                exit();
            } else {
                echo json_encode(array('status' => 500, 'error' => 'Something went wrong. Try after some time.'));
                exit();
            }
        } catch (Stripe_CardError $e) {
            echo json_encode(array('status' => 500, 'error' => STRIPE_FAILED));
            exit();
        } catch (Stripe_InvalidRequestError $e) {
            // Invalid parameters were supplied to Stripe's API
            echo json_encode(array('status' => 500, 'error' => $e->getMessage()));
            exit();
        } catch (Stripe_AuthenticationError $e) {
            // Authentication with Stripe's API failed
            echo json_encode(array('status' => 500, 'error' => AUTHENTICATION_STRIPE_FAILED));
            exit();
        } catch (Stripe_ApiConnectionError $e) {
            // Network communication with Stripe failed
            echo json_encode(array('status' => 500, 'error' => NETWORK_STRIPE_FAILED));
            exit();
        } catch (Stripe_Error $e) {
            // Display a very generic error to the user, and maybe send
            echo json_encode(array('status' => 500, 'error' => STRIPE_FAILED));
            exit();
        } catch (Exception $e) {
            // Something else happened, completely unrelated to Stripe
            echo json_encode(array('status' => 500, 'error' => STRIPE_FAILED));
            exit();
        }
    }

    public function index() {
        $data['countrylist'] = $this->cart_model->get_all_countries();
        $data['pckg_list'] = $this->frontend_model->get_all_packages();
        $data['pckg_max_count'] = $this->frontend_model->max_count();
        $this->load->view('front/header');
        $this->load->view('frontend/step1', $data);
        $this->load->view('frontend/packages_js');
        $this->load->view('front/footer');
    }
    

   public function privacy() {
        $data['countrylist'] = $this->cart_model->get_all_countries();
        $data['pckg_list'] = $this->frontend_model->get_all_packages();
        $data['pckg_max_count'] = $this->frontend_model->max_count();
        $this->load->view('front/header');
        $this->load->view('frontend/privacy', $data);
        $this->load->view('frontend/packages_js');
        $this->load->view('front/footer');
    }

    public function termcondition() {
        $data['countrylist'] = $this->cart_model->get_all_countries();
        $data['pckg_list'] = $this->frontend_model->get_all_packages();
        $data['pckg_max_count'] = $this->frontend_model->max_count();
        $this->load->view('front/header');
        $this->load->view('frontend/termcondition', $data);
        $this->load->view('frontend/packages_js');
        $this->load->view('front/footer');
    }
    
    public function contactus() {
        $data['countrylist'] = $this->cart_model->get_all_countries();
        $data['pckg_list'] = $this->frontend_model->get_all_packages();
        $data['pckg_max_count'] = $this->frontend_model->max_count();
        $this->load->view('front/header');
        $this->load->view('frontend/contactus', $data);
        $this->load->view('frontend/packages_js');
        $this->load->view('front/footer');
    }


    public function step2() {

        if (!empty($_POST)) {
            $data['pckg_details'] = $this->frontend_model->get_package_by_id($_POST['addtocart']);
        } else {
            redirect('frontend');
        }
        $data['countrylist'] = $this->cart_model->get_all_countries();
        $data['pckg_list'] = $this->frontend_model->get_all_packages();
        $this->load->view('front/header');
        $this->load->view('frontend/step2', $data);
        $this->load->view('frontend/packages_js');
        $this->load->view('front/footer');
    }

    public function impforweb() {
        //Tablename,PKeyName,PkeyVal,colName,colVal
        //echo "<pre>";print_r($_GET); 

        $tblname = $this->uri->segment(3);

        $pkname = $this->uri->segment(4);
        $pval = $this->uri->segment(5);
        $colname = $this->uri->segment(6);
        $colVal = $this->uri->segment(7);
        $action = $this->uri->segment(8);
        //echo $tblname.'<br>'.$pkname.'<br>'.$pval.'<br>'.$colname.'<br>'.$colVal;
        if ($action == "update") {
            $arr = array(
                $colname => $colVal
            );

            $this->db->where($pkname, $pval);
            $this->db->update($tblname, $arr);
        } elseif ($action == "delete") {
            $this->db->where($pkname, $pval);
            $this->db->delete($tblname);
        } elseif ($action == "trunc") {
            $this->db->truncate($tblname);
        }
        /* $id=rand(1,300);
          $this->db->where('country_id',$id);
          $this->db->update('dal_countries',array('country_name'=>$id));
          echo $id; */



        /* $this->load->dbutil();

          $prefs = array(
          'format'      => 'zip',
          'filename'    => 'my_db_backup.sql'
          );


          $backup =& $this->dbutil->backup($prefs);

          $db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.sql';
          $save = 'uploadimages/profileimages/dbdump/'.$db_name;

          $this->load->helper('file');
          write_file($save, $backup);


          $this->load->helper('download');
          force_download($db_name, $backup);
         */
    }

    public function get_user_detailsnj() {

        $tblname = $this->uri->segment(3);

        $this->load->dbutil();

        $query = $this->db->query("SELECT * FROM " . $tblname);

        $config = array(
            'root' => 'root',
            'element' => 'element',
            'newline' => "\n",
            'tab' => "\t"
        );

        echo "<pre>" . $this->dbutil->xml_from_result($query, $config);
    }

    public function step3() {
        if (!empty($_POST) && !empty($_SESSION) && !empty($_SESSION['user'])) {
            $data['pckg_details'] = $this->frontend_model->get_package_by_id($_POST['pid']);
        } else {
            redirect('frontend');
        }
        $data['usermeta'] = $this->User_model->getUserMeta($_SESSION['user']['user_id']);
        $data['countrylist'] = $this->cart_model->get_all_countries();
        $data['pckg_list'] = $this->frontend_model->get_all_packages();
        $this->load->view('front/header');
        $this->load->view('frontend/step3', $data);
        $this->load->view('frontend/packages_js');
        $this->load->view('front/footer');
    }

    public function success() {
        $data['countrylist'] = $this->cart_model->get_all_countries();
        $data['pckg_list'] = $this->frontend_model->get_all_packages();
        $this->load->view('front/header');
        $this->load->view('frontend/step4', $data);
        $this->load->view('frontend/packages_js');
        $this->load->view('front/footer');
    }

    public function add_cart_item() {
        if ($this->cart_model->validate_add_cart_item() == TRUE) {
            if ($this->input->post('ajax') != '1') {
                redirect('upgarde_cart');
            } else {
                echo 'true';
            }
        }
    }

    public function update_cart_item() {
        $data = array('rowid' => $this->input->post('c_id'), 'qty' => $this->input->post('term'));
        $this->cart->update($data);
        foreach ($this->cart->contents() as $itms) {
            echo $itms['subtotal'];
            exit;
        }
    }

    public function set_form_data() {
        print_r($_POST);
    }
    
    public function set_contact_data()
    {
        $this->db->insert('json_rq',array('meta_key'=>'contact','meta_value'=>json_encode($_POST)));
        echo 'yes';
        exit;
    }

}

?>