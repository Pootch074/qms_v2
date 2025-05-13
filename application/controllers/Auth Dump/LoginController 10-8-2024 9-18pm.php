<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->library('form_validation', 'session');
        $this->load->model('UserModel');
    }

    public function index()
    {
        $this->load->view('auth/login');
    }


    // Handle the login form submission
    public function login()
    {
        // Set validation rules
        //$this->form_validation->set_rules('input name', 'label', 'trim|required|valid_email');
        $this->form_validation->set_rules('employee_id', 'Employee ID', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, reload the login form with errors
            $this->index();
        } else {
            // Retrieve form data
            $employeeID = $this->input->post('employee_id');
            $password = $this->input->post('password');

            // Attempt to retrieve user from the database
            $result = $this->UserModel->loginUser($employeeID);

            if ($result && password_verify($password, $result->user_pass)) {
                // Password is correct, set session data
                $auth_userdetails = [
                    'user_id'    => $result->employeeID,
                    //'email'      => $result->email,
                    'fname'      => $result->fname,
                    'lname'      => $result->lname,
                    //'section'    => $result->section, // Assuming 'section' exists in the result
                    'logged_in'  => TRUE
                ];

                $this->session->set_userdata($auth_userdetails);

                // Check the user's section and redirect accordingly
                if ($result->user_type == 'QSF') {

                    // Pass the session data to the view
                    $this->session->set_userdata('user_id', $result->user_id); // Set email to session
                    redirect(base_url('qsf')); // Redirect to the PACD section
                } elseif ($result->user_type == 'PACD') {
                    redirect(base_url('pacd'));
                } elseif ($result->user_type == 'QSD') {
                    redirect(base_url('qsd'));
                } else {
                    redirect(base_url('login')); // Redirect to login if section doesn't match
                }
            } else {
                // Invalid email or password
                $this->session->set_flashdata('status', 'Invalid Employee or Password');
                redirect(base_url('login'));
            }
        }
    }


    // Optional: Logout method
    public function logout()
    {
        // Unset all session data
        $this->session->sess_destroy();
        // Redirect to login page
        redirect(base_url('login'));
    }
}
