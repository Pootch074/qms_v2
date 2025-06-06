<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegisterController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form', 'url');
        $this->load->library('form_validation', 'session');
        $this->load->model('UserModel');
    }
    public function index()
    {
        $this->load->view('auth/register');
    }


    // Handle the registration form submission
    public function register()
    {

        $this->form_validation->set_rules(
            'f_name',
            'First Name',
            'trim|required|regex_match[/^[a-zA-ZñÑ\s\'\-]+$/]',
            array('regex_match' => 'The {field} field may only contain letters, spaces, hyphens, apostrophes, and the ñ character.')
        );
        $this->form_validation->set_rules(
            'l_name',
            'Last Name',
            'trim|required|regex_match[/^[a-zA-ZñÑ\s\'\-]+$/]',
            array('regex_match' => 'The {field} field may only contain letters, spaces, hyphens, apostrophes, and the ñ character.')
        );
        $this->form_validation->set_rules(
            'emp_id',
            'Employee ID',
            'trim|required|exact_length[7]|regex_match[/^\d{2}-\d{4}$/]|is_unique[qms_users.employee_id]',
            array(
                'exact_length' => 'Please input the correct ID Number.',
                'regex_match' => 'The %s must be in the format XX-XXXX.',
                'is_unique' => 'The %s is already in use. Please choose a different Employee ID.'
            )
        );
        $this->form_validation->set_rules('role', 'role', 'required|in_list[Preasses,Encoder,Assesment,Release]');

        // Conditionally set 'window' validation rule
        if ($this->input->post('role') !== 'Preasses') {
            $this->form_validation->set_rules('window', 'window', 'required|in_list[1,2,3,4]');
        } else if ($this->input->post('role') !== 'Assesment' || 'Release') {
            $this->form_validation->set_rules('category', 'Category', 'required|in_list[Priority,Regular]');
        }




        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $role = $this->input->post('role');
            $ass_step = $this->input->post('step');  // default from form input if any

            // If role is "Preasses", override ass_step to 1
            if ($role === 'Preasses') {
                $ass_step = 1;
            } else if ($role === 'Encoder') {
                $ass_step = 2;
            } else if ($role === 'Assesment') {
                $ass_step = 3;
            } else {
                $ass_step = 4;
            }

            $data = array(
                'fname'        => $this->input->post('f_name'),
                'lname'        => $this->input->post('l_name'),
                'role'         => $role,
                'ass_step'     => $ass_step,
                'ass_window'   => $this->input->post('window'),
                'ass_category'   => $this->input->post('category'),
                'employee_id'  => $this->input->post('emp_id'),
            );

            $checking = $this->UserModel->registerUser($data);

            if ($checking) {
                $this->session->set_flashdata('status', 'Registration successful! Please log in.');
                redirect(base_url('login'));
            } else {
                $this->session->set_flashdata('status', 'Something went wrong. Please try again.');
                redirect(base_url('register'));
            }
        }
    }

    public function accReqAddPass()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]');
        $this->form_validation->set_message('matches', 'The {field} field does not match the Password field.');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('status', validation_errors());
            redirect(base_url('accountReq'));
        } else {
            $user_id = $this->input->post('user_id');
            $data = array(
                'user_pass' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'status'    => 'APPROVED'
            );

            $checking = $this->UserModel->accReqAddMod($user_id, $data);

            if ($checking) {
                $this->session->set_flashdata('status', 'User approved successfully!');
            } else {
                $this->session->set_flashdata('status', 'Failed to approve user.');
            }
            redirect(base_url('accountReq'));
        }
    }
}
