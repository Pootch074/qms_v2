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
				// Set user status to ACTIVE
				$this->UserModel->updateUserStatus($employeeID, 'ACTIVE');

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

				if (($result->user_type == 'QND') && ($result->ass_step == 1) && ($result->ass_category == 'PRIORITY')) {
					redirect(base_url('qndPrio'));
				} elseif (($result->user_type == 'QND') && ($result->ass_step == 1) && ($result->ass_category == 'REGULAR')) {
					redirect(base_url('qndRegu'));
				} elseif (($result->user_type == 'QSF') && ($result->ass_step == 2) && ($result->ass_category == 'PRIORITY')) {
					redirect(base_url('qsfS2Prio'));
				} elseif (($result->user_type == 'QSF') && ($result->ass_step == 2) && ($result->ass_category == 'REGULAR')) {
					redirect(base_url('qsfS2Regu'));
				} elseif (($result->user_type == 'QSF') && ($result->ass_step == 3) && ($result->ass_window == 1)) {
					redirect(base_url('qsfS3W1'));
				} elseif (($result->user_type == 'QSF') && ($result->ass_step == 3) && ($result->ass_window == 2)) {
					redirect(base_url('qsfS3W2'));
				} elseif (($result->user_type == 'QSF') && ($result->ass_step == 3) && ($result->ass_window == 3)) {
					redirect(base_url('qsfS3W3'));
				} elseif (($result->user_type == 'QSF') && ($result->ass_step == 4)) {
					redirect(base_url('qsfS4'));
				} elseif (($result->user_type == 'QSD') && ($result->ass_category == 'PRIORITY')) {
					redirect(base_url('qsdPrio'));
				} elseif (($result->user_type == 'QSD') && ($result->ass_category == 'REGULAR')) {
					redirect(base_url('qsdRegu'));
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
		// Get the currently logged-in user's ID from the session
		$employeeID = $this->session->userdata('user_id');

		// Set user status to INACTIVE
		if ($employeeID) {
			$this->UserModel->updateUserStatus($employeeID, 'INACTIVE');
		}

		// Unset all session data
		$this->session->sess_destroy();

		// Redirect to login page
		redirect(base_url('login'));
	}
}
