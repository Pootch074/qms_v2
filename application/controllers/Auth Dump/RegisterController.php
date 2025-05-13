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
        // Load the form validation library if not autoloaded
        $this->load->library('form_validation');

        // Set validation rules
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

        // Add the is_unique rule for emp_id
        $this->form_validation->set_rules(
            'emp_id',
            'Employee ID',
            'trim|required|max_length[6]|is_unique[qms_users.user_id]',
            array(
                'is_unique' => 'The %s is already in use. Please choose a different Employee ID.'
            )
        );

        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]');

        // Optional: Customize error messages
        $this->form_validation->set_message('matches', 'The {field} field does not match the Password field.');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, reload the form with errors
            $this->index();
        } else {
            // Prepare data for insertion
            $data = array(
                'fname'      => $this->input->post('f_name'),
                'lname'      => $this->input->post('l_name'),
                'user_id'    => $this->input->post('emp_id'),
                'user_pass'  => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                // Add other fields if necessary (e.g., email)
            );

            // Attempt to register the user
            $checking = $this->UserModel->registerUser($data);

            if ($checking) {
                // Registration successful
                $this->session->set_flashdata('status', 'Registration successful! Please log in.');
                redirect(base_url('login'));
            } else {
                // Registration failed
                $this->session->set_flashdata('status', 'Something went wrong. Please try again.');
                redirect(base_url('register'));
            }
        }
    }
}
