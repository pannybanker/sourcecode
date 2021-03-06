<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Goals extends Admin_controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('goals_model');
        if (!has_permission('manageGoals')) {
            access_denied('manageGoals');
        }
    }
    /* List all announcements */
    public function index()
    {
        if ($this->input->is_ajax_request()) {
            $this->perfex_base->get_table_data('goals');
        }
        $data['title'] = _l('goals_tracking');
        $this->load->view('admin/goals/manage', $data);
    }
    public function goal($id = '')
    {
        if ($this->input->post()) {
            if ($id == '') {
                $id = $this->goals_model->add($this->input->post());
                if ($id) {
                    set_alert('success', _l('added_successfuly', _l('goal')));
                    redirect(admin_url('goals/goal/' . $id));
                }
            } else {
                $success = $this->goals_model->update($this->input->post(), $id);
                if ($success) {
                    set_alert('success', _l('updated_successfuly', _l('goal')));
                }
                redirect(admin_url('goals/goal/' . $id));
            }
        }
        if ($id == '') {
            $title = _l('add_new', _l('goal_lowercase'));
        } else {
            $data['goal']        = $this->goals_model->get($id);
            $data['achievement'] = $this->goals_model->calculate_goal_achievement($id);
            $title               = _l('edit', _l('goal_lowercase'));
        }
        $this->load->model('contracts_model');
        $data['contract_types'] = $this->contracts_model->get_contract_types();
        $data['title']          = $title;
        $this->load->view('admin/goals/goal', $data);
    }
    /* Delete announcement from database */
    public function delete($id)
    {
        if (!$id) {
            redirect(admin_url('goals'));
        }
        $response = $this->goals_model->delete($id);
        if ($response == true) {
            set_alert('success', _l('deleted', _l('goal')));
        } else {
            set_alert('warning', _l('problem_deleting', _l('goal_lowercase')));
        }
        redirect(admin_url('goals'));
    }
    public function notify($id, $notify_type)
    {
        if (!$id) {
            redirect(admin_url('goals'));
        }
        $success = $this->goals_model->notify_staff_members($id, $notify_type);
        if ($success) {
            set_alert('success', _l('goal_notify_staff_notified_manualy_success'));
        } else {
            set_alert('warning', _l('goal_notify_staff_notified_manualy_fail'));
        }
        redirect(admin_url('goals/goal/' . $id));
    }
}
