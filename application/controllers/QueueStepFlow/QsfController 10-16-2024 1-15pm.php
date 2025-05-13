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
		$fname = $this->session->userdata('fname');
		$lname = $this->session->userdata('lname');
		$ass_step = $this->session->userdata('ass_step');
		$ass_category = $this->session->userdata('ass_category');
		$section = $this->session->userdata('section');

		$data = [
			'fname' => $fname,
			'lname' => $lname,
			'ass_step' => $ass_step,
			'ass_category' => $ass_category,
			'section' => $section
		];
		$this->load->view('template/header', $data);
		$this->load->view('queueStepFlow/qsf', $data);
		$this->load->view('template/footer');
	}



	public function autoDS() // Auto Display Serving
	{
		$this->load->model("QsfModel");
		$ass_step = $this->session->userdata('ass_step');
		$ass_category = $this->session->userdata('ass_category'); // Retrieve the category

		if (!$ass_step) {
			echo "Error: ass_step is not set in the session.";
			return;
		}
		$serving = $this->QsfModel->getServing($ass_step, $ass_category);

		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<div class="d-flex align-items-center justify-content-center mt-1">
                    <h1 class=" ' . (($row->category == 'PRIORITY') ? 'serveTicketPrio' : 'serveTicketRegu') . '">
                        ' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) .  '<br>' . $row->category . '
                    </h1>
                </div>';
			}
		} else {
		}
	}




	public function autoDQ()
	{
		$this->load->model("QsfModel");
		$ass_step = $this->session->userdata('ass_step');
		$ass_category = $this->session->userdata('ass_category');

		if (!$ass_step) {
			echo "Error: ass_step is not set in the session.";
			return;
		}

		// Get pending queues filtered by step and category
		$queues = $this->QsfModel->getQueues($ass_step, $ass_category);

		if (!empty($queues)) {
			foreach ($queues as $row) {
				echo '<div class="d-grid gap-2 mt-1">
                <button class="btn pe-none ' . (($row->category == 'PRIORITY') ? 'btnCstmPriorityUpcoming btn-danger' : 'btnCstmRegularUpcoming btn-primary') . '">
                    ' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . ' - ' . $row->category . '
                </button>
            </div>';
			}
		} else {
			echo '<p>Empty</p>';
		}
	}
	/*
public function autoDQRegular()
	{
		$this->load->model("QsfModel");
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: ass_step is not set in the session.";
			return;
		}
		$reguQueues = $this->QsfModel->getReguQueue($ass_step);
		if (!empty($reguQueues)) {
			foreach ($reguQueues as $row) {
				echo '<div class="d-grid gap-2 mt-1">
                <button class="btn pe-none ' . (($row->category == 'PRIORITY') ? 'btnCstmPriorityUpcoming btn-danger' : 'btnCstmRegularUpcoming btn-primary') . '">
                    ' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . ' - ' . $row->category . '
                </button>
            </div>';
			}
		} else {
			echo '<p>Empty</p>';
		}
	}

	public function autoDQPriority()
	{
		$this->load->model("QsfModel");
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: ass_step is not set in the session.";
			return;
		}
		$prioQueues = $this->QsfModel->getPrioQueue($ass_step);
		if (!empty($prioQueues)) {
			foreach ($prioQueues as $row) {
				echo '<div class="d-grid gap-2 mt-1">
					<button class="btn pe-none ' . (($row->category == 'PRIORITY') ? 'btnCstmPriorityUpcoming btn-danger' : 'btnCstmRegularUpcoming btn-primary') . '">
						' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . ' - ' . $row->category . '
					</button>
				</div>';
			}
		} else {
			echo '<p>Empty</p>';
		}
	}
*/

	public function autoDP()
	{
		$this->load->model("QsfModel");
		$ass_step = $this->session->userdata('ass_step');
		$ass_category = $this->session->userdata('ass_category');

		if (!$ass_step) {
			echo "Error: ass_step is not set in the session.";
			return;
		}

		$pending = $this->QsfModel->getPending($ass_step, $ass_category);

		if (!empty($pending)) {

			foreach ($pending as $row) {
				echo '<div id="pendingBtn" class="d-grid gap-2 mt-1">
                <button class="btn ' . (($row->category == 'PRIORITY') ? 'btnCstmPriorityUpcoming btn-danger' : 'btnCstmRegularUpcoming btn-primary') . '">
                    ' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . ' - ' . $row->category . '
                </button>
            </div>';
			}
		} else {
			echo '<p>Empty</p>';
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
	{
		$this->load->model('QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->QsfModel->nextRegular($ass_step);
		echo json_encode(array('status' => 'success'));
	}
	public function nextPriority()
	{
		$this->load->model('QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->QsfModel->nextPriority($ass_step);
		echo json_encode(array('status' => 'success'));
	}

	public function nextSkip()
	{
		$this->load->model('QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$ass_category = $this->session->userdata('ass_category');

		// Pass the values to the model
		$this->QsfModel->nextSkip($ass_step, $ass_category);

		echo json_encode(array('status' => 'success'));
	}

	public function nextCall()
	{
		$this->load->model('QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$ass_category = $this->session->userdata('ass_category');
		$this->QsfModel->nextCall($ass_step, $ass_category);
		echo json_encode(array('status' => 'success'));
	}


	public function nextProceed()
	{
		$this->load->model('QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$ass_category = $this->session->userdata('ass_category');
		$this->QsfModel->nextProceed($ass_step, $ass_category);
		echo json_encode(array('status' => 'success'));
	}
}
