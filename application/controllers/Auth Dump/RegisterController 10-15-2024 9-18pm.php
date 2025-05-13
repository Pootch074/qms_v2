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
        // Set validation rules
        $this->form_validation->set_rules('f_name', 'First Name', 'trim|required|alpha');
        $this->form_validation->set_rules('l_name', 'Last Name', 'trim|required|alpha');
        $this->form_validation->set_rules('e_mail', 'Email', 'trim|required|valid_email');
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
                'email'      => $this->input->post('e_mail'),
                'user_pass'  => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                // Add other fields if necessary (e.g., email)
            );

            // Attempt to register the user
            $checking = $this->UserModel->registerUser($data);

            if ($checking) {
                // Registration successful
                $this->session->set_flashdata('status', 'Registered Successfully! Go to Login');
                redirect(base_url('login'));
            } else {
                // Registration failed
                $this->session->set_flashdata('status', 'Something went wrong.');
                redirect(base_url('register'));
            }
        }
    }
}
