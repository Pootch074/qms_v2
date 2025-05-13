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
		$position = $this->session->userdata('position');
		$ass_step = $this->session->userdata('ass_step');
		$ass_category = $this->session->userdata('ass_category');
		$section = $this->session->userdata('section');

		$data = [
			'fname' => $fname,
			'lname' => $lname,
			'position' => $position,
			'ass_step' => $ass_step,
			'ass_category' => $ass_category,
			'section' => $section
		];

		$this->load->view('template/header', $data);
		$this->load->view('queueStepFlow/qsf', $data);
		$this->load->view('template/footer');
	}

	public function qsfS2P()
	{
		$fname = $this->session->userdata('fname');
		$lname = $this->session->userdata('lname');
		$position = $this->session->userdata('position');
		$ass_step = $this->session->userdata('ass_step');
		$ass_category = $this->session->userdata('ass_category');
		$section = $this->session->userdata('section');

		$data = [
			'fname' => $fname,
			'lname' => $lname,
			'position' => $position,
			'ass_step' => $ass_step,
			'ass_category' => $ass_category,
			'section' => $section
		];

		$this->load->view('template/header', $data);
		$this->load->view('queueStepFlow/qsfPriority', $data);
		$this->load->view('template/footer');
	}

	public function qsfS2R()
	{
		$fname = $this->session->userdata('fname');
		$lname = $this->session->userdata('lname');
		$position = $this->session->userdata('position');
		$ass_step = $this->session->userdata('ass_step');
		$ass_category = $this->session->userdata('ass_category');
		$section = $this->session->userdata('section');

		$data = [
			'fname' => $fname,
			'lname' => $lname,
			'position' => $position,
			'ass_step' => $ass_step,
			'ass_category' => $ass_category,
			'section' => $section
		];

		$this->load->view('template/header', $data);
		$this->load->view('queueStepFlow/qsfRegular', $data);
		$this->load->view('template/footer');
	}



	public function s2autoDSPrio() // Auto Display Serving
	{
		$serving = $this->QsfModel->s2getServingPrio();
		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketPrio">P' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '</h1>';
			}
		} else {
		}
	}


	public function s2autoDSRegu() // Auto Display Serving
	{
		$serving = $this->QsfModel->s2getServingRegu();
		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketRegu">R' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '</h1>';
			}
		} else {
		}
	}





	public function s2autoDQPrio()
	{
		$ass_step = $this->session->userdata('ass_step');

		if (!$ass_step) {
			echo "Error: ass_step is not set in the session.";
			return;
		}
		$queues = $this->QsfModel->s2getPrioQueues();

		if (!empty($queues)) {
			foreach ($queues as $row) {
				echo '<div class="d-grid gap-2 mt-1">
                <button class="btn pe-none btnCstmPriorityUpcoming btn-danger">
                    ' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . ' - ' . $row->category . '
                </button>
            </div>';
			}
		} else {
			echo '<p>Empty</p>';
		}
	}

	public function s2autoDQRegu()
	{
		$ass_step = $this->session->userdata('ass_step');

		if (!$ass_step) {
			echo "Error: ass_step is not set in the session.";
			return;
		}
		$queues = $this->QsfModel->s2getReguQueues();

		if (!empty($queues)) {
			foreach ($queues as $row) {
				echo '<div class="d-grid gap-2 mt-1">
                <button class="btn pe-none btnCstmRegularUpcoming btn-primary">
                    ' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . ' - ' . $row->category . '
                </button>
            </div>';
			}
		} else {
			echo '<p>Empty</p>';
		}
	}


	public function s2autoDPPrio()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: ass_step is not set in the session.";
			return;
		}
		$pending = $this->QsfModel->s2getPrioPending($ass_step);
		if (!empty($pending)) {
			foreach ($pending as $row) {
				echo '<div class="d-grid gap-2 mt-1">';
				echo '<button id="pendingBtn" data-id="' . $row->id . '" class="btn ' . (($row->category == 'PRIORITY') ? 'btnCstmPriorityUpcoming btn-danger' : 'btnCstmRegularUpcoming btn-primary') . '" onclick="window.location.href=\'' . base_url('qsfUpdatePendingPrio/' . $row->id) . '\'">';
				echo str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . ' - ' . $row->category;
				echo '</button>';
				echo '</div>';
			}
		} else {
			echo '<p>Empty</p>';
		}
	}

	public function qsfUpdatePendingContPrio($id)
	{
		$this->load->model('QsfModel');
		$this->QsfModel->qsfUpdatePendingModPrio($id);
		redirect(base_url('qsfS2Prio'));
	}

	public function s2autoDPRegu()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: ass_step is not set in the session.";
			return;
		}
		$pending = $this->QsfModel->s2getReguPending($ass_step);
		if (!empty($pending)) {
			foreach ($pending as $row) {
				echo '<div class="d-grid gap-2 mt-1">';
				echo '<button id="pendingBtn" data-id="' . $row->id . '" class="btn ' . (($row->category == 'PRIORITY') ? 'btnCstmPriorityUpcoming btn-danger' : 'btnCstmRegularUpcoming btn-primary') . '" onclick="window.location.href=\'' . base_url('qsfUpdatePending/' . $row->id) . '\'">';
				echo str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . ' - ' . $row->category;
				echo '</button>';
				echo '</div>';
			}
		} else {
			echo '<p>Empty</p>';
		}
	}

	public function qsfUpdatePendingContRegu($id)
	{
		$this->load->model('QsfModel');
		$this->QsfModel->qsfUpdatePendingModRegu($id);
		redirect(base_url('qsfS2Regu'));
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
