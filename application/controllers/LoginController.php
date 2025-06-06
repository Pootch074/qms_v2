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

			if ($result && !empty($result->user_pass) && password_verify($password, $result->user_pass)) {

				// Set user status to ACTIVE
				$this->UserModel->updateUserStatus($employeeID, 'ACTIVE');

				$auth_userdetails = [
					'employee_id'    => $result->employee_id,
					'role'   => $result->role,
					'fname'      => $result->fname,
					'lname'      => $result->lname,
					'role'      => $result->role,
					'ass_step'   => $result->ass_step,
					'ass_category' => $result->ass_category,
					'logged_in'  => TRUE
				];

				$this->session->set_userdata($auth_userdetails);

				// Redirect based on user type, step, category, etc.
				$this->redirectUserBasedOnRole($result);
			} else {
				$this->session->set_flashdata('status', 'Invalid Employee ID or Password');
				redirect(base_url('login'));
			}
		}
	}


	private function redirectUserBasedOnRole($result)
	{
		if ($result->role == 'Preasses' && $result->ass_step == 1 && $result->ass_category == 'PRIORITY' && $result->status == 'APPROVED') {
			redirect(base_url('qndPrio'));
		} elseif ($result->role == 'Preasses' && $result->ass_step == 1 && $result->ass_category == 'REGULAR' && $result->status == 'APPROVED') {
			redirect(base_url('qndRegu'));
		} elseif ($result->role == 'Encode' && $result->ass_step == 2 && $result->ass_window == 1 && $result->ass_category == 'PRIORITY' && $result->status == 'APPROVED') {
			redirect(base_url('qsfs2w1PrioRou'));
		} elseif ($result->role == 'Encode' && $result->ass_step == 2 && $result->ass_window == 2 && $result->ass_category == 'PRIORITY' && $result->status == 'APPROVED') {
			redirect(base_url('qsfs2w2PrioRou'));
		} elseif ($result->role == 'Encode' && $result->ass_step == 2 && $result->ass_window == 1 && $result->ass_category == 'REGULAR' && $result->status == 'APPROVED') {
			redirect(base_url('qsfs2w1Regu'));
		} elseif ($result->role == 'Encode' && $result->ass_step == 2 && $result->ass_window == 2 && $result->ass_category == 'REGULAR' && $result->status == 'APPROVED') {
			redirect(base_url('qsfs2w2Regu'));
		} elseif ($result->role == 'Assesment' && $result->ass_step == 3 && $result->ass_window == 1 && $result->status == 'APPROVED') {
			redirect(base_url('qsfS3W1Rou'));
		} elseif ($result->role == 'Assesment' && $result->ass_step == 3 && $result->ass_window == 2 && $result->status == 'APPROVED') {
			redirect(base_url('qsfS3W2Rou'));
		} elseif ($result->role == 'Assesment' && $result->ass_step == 3 && $result->ass_window == 3 && $result->status == 'APPROVED') {
			redirect(base_url('qsfS3W3Rou'));
		} elseif ($result->role == 'Assesment' && $result->ass_step == 3 && $result->ass_window == 4 && $result->status == 'APPROVED') {
			redirect(base_url('qsfS3W4Rou'));
		} elseif ($result->role == 'Release' && $result->ass_step == 4 && $result->ass_window == 1 && $result->status == 'APPROVED') {
			redirect(base_url('qsfS4W1Rou'));
		} elseif ($result->role == 'Release' && $result->ass_step == 4 && $result->ass_window == 2 && $result->status == 'APPROVED') {
			redirect(base_url('qsfS4W2Rou'));
		} elseif ($result->role == 'Release' && $result->ass_step == 4 && $result->ass_window == 3 && $result->status == 'APPROVED') {
			redirect(base_url('qsfS4W3Rou'));
		} elseif ($result->role == 'Display' && $result->ass_category == 'PRIORITY' && $result->status == 'APPROVED') {
			redirect(base_url('qsdPrio'));
		} elseif ($result->role == 'Display' && $result->ass_category == 'REGULAR' && $result->status == 'APPROVED') {
			redirect(base_url('qsdRegu'));
		} elseif ($result->role == 'Admin' && $result->ass_category == 'BOTH' && $result->status == 'APPROVED') {
			redirect(base_url('admin'));
		} else {
			redirect(base_url('login'));
		}
	}

	public function logout()
	{
		$employeeID = $this->session->userdata('employee_id');
		if ($employeeID) {
			$this->UserModel->updateUserStatusLogout($employeeID);
		}
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
