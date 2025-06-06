<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property CI_Session $session
 * @property QsfModel $QsfModel
 * @property S4QsfModel $S4QsfModel
 */

class S4QsfController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('S4QsfModel');
		$this->load->library('session');
	}

	private function loadQsfView($viewName)
	{
		$this->load->model("QsfModel");

		$data = [
			'fname'     => $this->session->userdata('fname'),
			'lname'     => $this->session->userdata('lname'),
			'position'  => $this->session->userdata('position'),
			'ass_step'  => $this->session->userdata('ass_step'),
			'section'   => $this->session->userdata('section'),
		];

		$this->load->view('template/header', $data);
		$this->load->view("queueStepFlow/{$viewName}", $data);
		$this->load->view('template/footer');
	}

	public function qsfS4W1Cont()
	{
		$this->loadQsfView('qsfS4W1');
	}

	public function qsfS4W2Cont()
	{
		$this->loadQsfView('qsfS4W2');
	}
	public function qsfS4W3Cont()
	{
		$this->loadQsfView('qsfS4W3');
	}



	public function s4w1autoDSCont()
	{
		$ass_step = $this->session->userdata('ass_step');

		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$serving = $this->S4QsfModel->s4w1autoDSMod();

		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '
					<h1 class="' . (($row->category == 'PRIORITY') ? 'serveTicketPrio' : 'serveTicketRegu') . '">
						' . (($row->category == 'REGULAR') ? 'R-' : 'P-') . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
					</h1>
					';
			}
		} else {
			// Handle case where $serving is empty if needed
		}
	}
	public function s4w2autoDSCont()
	{
		$ass_step = $this->session->userdata('ass_step');

		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$serving = $this->S4QsfModel->s4w2autoDSMod();

		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '
					<h1 class="' . (($row->category == 'PRIORITY') ? 'serveTicketPrio' : 'serveTicketRegu') . '">
						' . (($row->category == 'REGULAR') ? 'R-' : 'P-') . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
					</h1>
					';
			}
		} else {
			// Handle case where $serving is empty if needed
		}
	}
	public function s4w3autoDSCont()
	{
		$ass_step = $this->session->userdata('ass_step');

		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$serving = $this->S4QsfModel->s4w3autoDSMod();

		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '
					<h1 class="' . (($row->category == 'PRIORITY') ? 'serveTicketPrio' : 'serveTicketRegu') . '">
						' . (($row->category == 'REGULAR') ? 'R-' : 'P-') . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
					</h1>
					';
			}
		} else {
			// Handle case where $serving is empty if needed
		}
	}
	/**/
	public function jsonS4W1QueRegCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$reguQueues = $this->S4QsfModel->jsonS4W1QueRegMod($ass_step);
		$json_data['data'] = $reguQueues;
		echo json_encode($json_data);
	}
	public function jsonS4W2QueRegCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$reguQueues = $this->S4QsfModel->jsonS4W2QueRegMod($ass_step);
		$json_data['data'] = $reguQueues;
		echo json_encode($json_data);
	}
	public function jsonS4W3QueRegCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$reguQueues = $this->S4QsfModel->jsonS4W3QueRegMod($ass_step);
		$json_data['data'] = $reguQueues;
		echo json_encode($json_data);
	}

	public function jsonS4W1QuePrioCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$prioQueues = $this->S4QsfModel->jsonS4W1QuePrioMod($ass_step);
		$json_data['data'] = $prioQueues;
		echo json_encode($json_data);
	}
	public function jsonS4W2QuePrioCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$prioQueues = $this->S4QsfModel->jsonS4W2QuePrioMod($ass_step);
		$json_data['data'] = $prioQueues;
		echo json_encode($json_data);
	}
	public function jsonS4W3QuePrioCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$prioQueues = $this->S4QsfModel->jsonS4W3QuePrioMod($ass_step);
		$json_data['data'] = $prioQueues;
		echo json_encode($json_data);
	}



	public function jsonS4W1autoDPCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$pending = $this->S4QsfModel->jsonS4W1PendMod($ass_step);
		$json_data['data'] = $pending;
		echo json_encode($json_data);
	}
	public function jsonS4W2autoDPCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$pending = $this->S4QsfModel->jsonS4W2PendMod($ass_step);
		$json_data['data'] = $pending;
		echo json_encode($json_data);
	}
	public function jsonS4W3autoDPCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$pending = $this->S4QsfModel->jsonS4W3PendMod($ass_step);
		$json_data['data'] = $pending;
		echo json_encode($json_data);
	}

	public function qsfS4W1UpdPendCont($id)
	{
		$this->load->model('S4QsfModel');
		$this->S4QsfModel->qsfS4W1UpdPendMod($id);
		echo json_encode(['status' => 'success']);
	}
	public function qsfS4W2UpdPendCont($id)
	{
		$this->load->model('S4QsfModel');
		$this->S4QsfModel->qsfS4W2UpdPendMod($id);
		echo json_encode(['status' => 'success']);
	}
	public function qsfS4W3UpdPendCont($id)
	{
		$this->load->model('S4QsfModel');
		$this->S4QsfModel->qsfS4W3UpdPendMod($id);
		echo json_encode(['status' => 'success']);
	}

	public function s4w1RegBtnCont()
	{
		$this->load->model('S4QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S4QsfModel->s4w1RegBtnMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}
	public function s4w2RegBtnCont()
	{
		$this->load->model('S4QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S4QsfModel->s4w2RegBtnMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}
	public function s4w3RegBtnCont()
	{
		$this->load->model('S4QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S4QsfModel->s4w3RegBtnMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}

	public function s4w1PrioBtnCont()
	{
		$this->load->model('S4QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S4QsfModel->s4w1PrioBtnMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}
	public function s4w2PrioBtnCont()
	{
		$this->load->model('S4QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S4QsfModel->s4w2PrioBtnMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}
	public function s4w3PrioBtnCont()
	{
		$this->load->model('S4QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S4QsfModel->s4w3PrioBtnMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}

	public function s4w1SkipCont()
	{
		$this->load->model('S4QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S4QsfModel->s4w1SkipMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}
	public function s4w2SkipCont()
	{
		$this->load->model('S4QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S4QsfModel->s4w2SkipMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}
	public function s4w3SkipCont()
	{
		$this->load->model('S4QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S4QsfModel->s4w3SkipMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}

	public function s4w1ProceedCont()
	{
		$this->load->model('S4QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S4QsfModel->s4w1ProceedMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}
	public function s4w2ProceedCont()
	{
		$this->load->model('S4QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S4QsfModel->s4w2ProceedMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}
	public function s4w3ProceedCont()
	{
		$this->load->model('S4QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S4QsfModel->s4w3ProceedMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}
}
