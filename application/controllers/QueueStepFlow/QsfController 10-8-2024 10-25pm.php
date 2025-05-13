<?php
defined('BASEPATH') or exit('No direct script access allowed');

class QsfController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Load the model in the constructor
		$this->load->model('QsfModel');
		$this->load->library('session');
	}


	public function index()
	{
		$this->load->model("QsfModel");
		$pending = $this->QsfModel->getPending();
		$serving = $this->QsfModel->getServing();
		$fname = $this->session->userdata('fname');
		$lname = $this->session->userdata('lname');
		$ass_step = $this->session->userdata('ass_step');
		$section = $this->session->userdata('section');

		$data = [
			'pending' => $pending,
			'serving' => $serving,
			'fname' => $fname,
			'lname' => $lname,
			'ass_step' => $ass_step,
			'section' => $section
		];
		$this->load->view('template/header', $data);
		$this->load->view('queueStepFlow/qsf', $data);
		$this->load->view('template/footer');
	}






	public function autoDS() // Auto Display Upcoming
	{
		$this->load->model("QsfModel");
		$serving = $this->QsfModel->getServing();

		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<div class="d-grid gap-2 mt-1">
                    <button class="btn pe-none ' . (($row->category == 'PRIORITY') ? 'btnCstmPriorityUpcoming btn-danger' : 'btnCstmRegularUpcoming btn-primary') . '">
                        ' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . ' - ' . $row->category . '
                    </button>
                </div>';
			}
		} else {
			echo '<p>No queue on serve.</p>';
		}
	}
	
	10-8-2024 10-4pm
	public function autoDU()
	{
		$this->load->model("QsfModel");
		$upcoming = $this->QsfModel->getIncoming();

		if (!empty($upcoming)) {
			foreach ($upcoming as $row) {
				echo '<div class="d-grid gap-2 mt-1">
                    <button class="btn pe-none ' . (($row->category == 'PRIORITY') ? 'btnCstmPriorityUpcoming btn-danger' : 'btnCstmRegularUpcoming btn-primary') . '">
                        ' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . ' - ' . $row->category . '
                    </button>
                </div>';
			}
		} else {
			echo '<p>No upcoming queues.</p>';
		}
	}

	



	
	

	public function autoDP() // Auto Display Pending
	{
		$this->load->model("QsfModel");
		$pending = $this->QsfModel->getPending();

		if (!empty($pending)) {
			foreach ($pending as $row) {
				echo '<div class="d-grid gap-2 mt-1">
                    <button class="btn ' . (($row->category == 'PRIORITY') ? 'btnCstmPriorityPending btn-danger' : 'btnCstmRegularPending btn-primary') . '">
                        ' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . ' - ' . $row->category . '
                    </button>
                </div>';
			}
		} else {
			echo '<p>No pending queues.</p>';
		}
	}


	public function headerGetUser()
	{
		$this->load->model("QsfModel");
		$crrntUser = $this->QsfModel->getUser();
		$data = [
			'crrntUser' => $crrntUser
		];
		$this->load->view('template/header', $data);
	}












	public function nextRegular()
	// REGULAR BUTTON STATUS = 1
	{
		$this->load->model('QsfModel');
		$regresult = $this->QsfModel->nextRegular();
		echo json_encode($regresult);
	}
	public function nextPriority()
	// PRIORITY BUTTON STATUS = 1
	{
		$this->load->model('QsfModel');
		$this->QsfModel->nextPriority();
		echo json_encode(array('status' => 'success'));
	}

	public function nextSkip()
	// SKIP BUTTON STATUS = 2
	{
		$this->load->model('QsfModel');
		$this->QsfModel->nextSkip();
		echo json_encode(array('status' => 'success'));
	}

	public function nextProceed()
	// PROCEED BUTTON STATUS = 2
	{
		$this->load->model('QsfModel');
		$this->QsfModel->nextProceed();
		echo json_encode(array('status' => 'success'));
	}
}
