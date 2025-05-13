<?php
defined('BASEPATH') or exit('No direct script access allowed');

class QsfController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('QsfModel');
		$this->load->model('UserModel');
		$this->load->library('session');
	}

	// STEP 2 PRIORITY
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
	public function s2autoDQPrioCont()
	{
		$queues = $this->QsfModel->s2autoDQPrioMod();
		if (!empty($queues)) {
			foreach ($queues as $row) {
				echo '<div class="d-grid gap-2 mt-1">
                <button class="qsfS2PendingVal btn pe-none btnCstmPriorityUpcoming">
                    P-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
                </button>
            </div>';
			}
		} else {
			echo '<p>Empty</p>';
		}
	}
	public function s2autoDPPrioCont()
	{
		$pending = $this->QsfModel->s2autoDPPrioMod();
		$json_data['data'] = $pending;
		echo json_encode($json_data);
	}
	public function s2autoDSPrioCont() // Auto Display Serving
	{
		$serving = $this->QsfModel->s2autoDSPrioMod();
		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketPrio">P-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '</h1>';
			}
		} else {
		}
	}

	public function s2PrioBtnCont()
	{
		$this->load->model('QsfModel');
		$this->QsfModel->s2PrioBtnMod();
		echo json_encode(array('status' => 'success'));
	}
	public function s2SkipPrioBtnCont()
	{
		$this->load->model('QsfModel');
		$this->QsfModel->s2SkipPrioBtnMod();
		echo json_encode(array('status' => 'success'));
	}
	public function s2ProceedPrioBtnCont()
	{
		$this->load->model('QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$ass_category = $this->session->userdata('ass_category');
		$this->QsfModel->s2ProceedPrioBtnMod($ass_step, $ass_category);
		echo json_encode(array('status' => 'success'));
	}
	public function s2UpdatePendingPrioCont($id)
	{
		$this->load->model('QsfModel');
		$this->QsfModel->s2UpdatePendingPrioMod($id);
		echo json_encode(['status' => 'success']);
	}

	// STEP 2 REGULAR
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
	public function s2autoDQReguCont()
	{
		$queues = $this->QsfModel->s2autoDQReguMod();
		if (!empty($queues)) {
			foreach ($queues as $row) {
				echo '<div class="d-grid gap-2 mt-1">
                <button class="qsfS2PendingVal btn pe-none btnCstmRegularUpcoming">
                    R-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
                </button>
            </div>';
			}
		} else {
			echo '<p>Empty</p>';
		}
	}
	public function s2autoDPReguCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: ass_step is not set in the session.";
			return;
		}
		$pending = $this->QsfModel->s2autoDPReguMod($ass_step);
		$json_data['data'] = $pending;
		echo json_encode($json_data);
	}
	public function s2autoDSReguCont()
	{
		$serving = $this->QsfModel->s2autoDSReguMod();
		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketRegu">R-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '</h1>';
			}
		} else {
		}
	}

	public function s2ReguBtnCont()
	{
		$this->load->model('QsfModel');
		$this->QsfModel->s2ReguBtnMod();
		echo json_encode(array('status' => 'success'));
	}
	public function s2SkipReguBtnCont()
	{
		$this->load->model('QsfModel');
		$this->QsfModel->s2SkipReguBtnMod();
		echo json_encode(array('status' => 'success'));
	}
	public function s2ProceedReguBtnCont()
	{
		$this->load->model('QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$ass_category = $this->session->userdata('ass_category');
		$this->QsfModel->s2ProceedReguBtnMod($ass_step, $ass_category);
		echo json_encode(array('status' => 'success'));
	}
	public function s2UpdatePendingReguCont($id)
	{
		$this->load->model('QsfModel');
		$this->QsfModel->s2UpdatePendingReguMod($id);
		echo json_encode(['status' => 'success']);
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

	public function nextCall()
	{
		$this->load->model('QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$ass_category = $this->session->userdata('ass_category');
		$this->QsfModel->nextCall($ass_step, $ass_category);
		echo json_encode(array('status' => 'success'));
	}
}
