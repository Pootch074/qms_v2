<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property CI_Session $session
 * @property QsfModel $QsfModel
 * @property UserModel $UserModel
 */
class QsfControllerTest extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('QsfModel');
		$this->load->model('UserModel');
		$this->load->library('session');
	}

	public function prioTestCont()
	{
		// $fname = $this->session->userdata('fname');
		// $lname = $this->session->userdata('lname');
		// $position = $this->session->userdata('position');
		// $ass_step = $this->session->userdata('ass_step');
		// $ass_category = $this->session->userdata('ass_category');
		// $section = $this->session->userdata('section');

		// $data = [
		// 	'fname' => $fname,
		// 	'lname' => $lname,
		// 	'position' => $position,
		// 	'ass_step' => $ass_step,
		// 	'ass_category' => $ass_category,
		// 	'section' => $section
		// ];

		// $this->load->view('template/headerTest', $data);
		// $this->load->view('queueStepFlow/prioTestView', $data);

		$this->load->view('template/headerTest');
		$this->load->view('queueStepFlow/prioTestView');
		$this->load->view('template/footerTest');
	}
}
