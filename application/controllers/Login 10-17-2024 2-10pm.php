<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends CI_Controller
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

	public function login()
	{
		$this->form_validation->set_rules('employee_id', 'Employee ID', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$employeeID = $this->input->post('employee_id');
			$password = $this->input->post('password');
			$result = $this->UserModel->loginUser($employeeID);

			if ($result && password_verify($password, $result->user_pass)) {
				$auth_userdetails = [
					'user_id'    => $result->employeeID,
					'position'    => $result->position,
					'fname'      => $result->fname,
					'lname'      => $result->lname,
					'ass_step'      => $result->ass_step,
					'ass_category'      => $result->ass_category,
					'section'      => $result->section,
					'logged_in'  => TRUE
				];

				$this->session->set_userdata($auth_userdetails);

				if (($result->user_type == 'QSF') && ($result->ass_step == 2)) {
					redirect(base_url('qsf'));
				} elseif (($result->user_type == 'QSF') && ($result->ass_step == 3)) {
					redirect(base_url('qsfS3'));
				} elseif (($result->user_type == 'QSF') && ($result->ass_step == 4)) {
					redirect(base_url('qsfS4'));
				} elseif ($result->user_type == 'PACD') {
					redirect(base_url('pacd'));
				} elseif ($result->user_type == 'QSD') {
					redirect(base_url('qsd'));
				} else {
					redirect(base_url('login'));
				}
			} else {
				$this->session->set_flashdata('status', 'Invalid Employee ID or Password');
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
