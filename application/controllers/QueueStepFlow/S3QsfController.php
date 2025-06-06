<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property CI_Session $session
 * @property S3QsfModel $S3QsfModel
 */
class S3QsfController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('S3QsfModel');
		$this->load->library('session');
	}


	public function index()
	{
		$this->load->model("QsfModel");
		$fname = $this->session->userdata('fname');
		$lname = $this->session->userdata('lname');
		$position = $this->session->userdata('position');
		$ass_step = $this->session->userdata('ass_step');
		$section = $this->session->userdata('section');

		$data = [
			'fname' => $fname,
			'lname' => $lname,
			'position' => $position,
			'ass_step' => $ass_step,
			'section' => $section
		];
		$this->load->view('template/header', $data);
		$this->load->view('queueStepFlow/qsfS3', $data);
		$this->load->view('template/footer');
	}
	public function qsfS3W1Cont()
	{
		$this->load->model("QsfModel");
		$fname = $this->session->userdata('fname');
		$lname = $this->session->userdata('lname');
		$position = $this->session->userdata('position');
		$ass_step = $this->session->userdata('ass_step');
		$section = $this->session->userdata('section');

		$data = [
			'fname' => $fname,
			'lname' => $lname,
			'position' => $position,
			'ass_step' => $ass_step,
			'section' => $section
		];
		$this->load->view('template/header', $data);
		$this->load->view('queueStepFlow/qsfS3W1', $data);
		$this->load->view('template/footer');
	}
	public function qsfS3W2Cont()
	{
		$this->load->model("QsfModel");
		$fname = $this->session->userdata('fname');
		$lname = $this->session->userdata('lname');
		$position = $this->session->userdata('position');
		$ass_step = $this->session->userdata('ass_step');
		$section = $this->session->userdata('section');

		$data = [
			'fname' => $fname,
			'lname' => $lname,
			'position' => $position,
			'ass_step' => $ass_step,
			'section' => $section
		];
		$this->load->view('template/header', $data);
		$this->load->view('queueStepFlow/qsfS3W2', $data);
		$this->load->view('template/footer');
	}
	public function qsfS3W3Cont()
	{
		$this->load->model("QsfModel");
		$fname = $this->session->userdata('fname');
		$lname = $this->session->userdata('lname');
		$position = $this->session->userdata('position');
		$ass_step = $this->session->userdata('ass_step');
		$section = $this->session->userdata('section');

		$data = [
			'fname' => $fname,
			'lname' => $lname,
			'position' => $position,
			'ass_step' => $ass_step,
			'section' => $section
		];
		$this->load->view('template/header', $data);
		$this->load->view('queueStepFlow/qsfS3W3', $data);
		$this->load->view('template/footer');
	}
	public function qsfS3W4Cont()
	{
		$this->load->model("QsfModel");
		$fname = $this->session->userdata('fname');
		$lname = $this->session->userdata('lname');
		$position = $this->session->userdata('position');
		$ass_step = $this->session->userdata('ass_step');
		$section = $this->session->userdata('section');

		$data = [
			'fname' => $fname,
			'lname' => $lname,
			'position' => $position,
			'ass_step' => $ass_step,
			'section' => $section
		];
		$this->load->view('template/header', $data);
		$this->load->view('queueStepFlow/qsfS3W4', $data);
		$this->load->view('template/footer');
	}



	public function s3autoDS() // Auto Display Serving
	{
		$ass_step = $this->session->userdata('ass_step');

		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$serving = $this->S3QsfModel->s3getServing();

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
	public function s3w1autoDSCont() // Auto Display Serving
	{
		$ass_step = $this->session->userdata('ass_step');

		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$serving = $this->S3QsfModel->s3w1autoDSMod();

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
	public function s3w2autoDSCont() // Auto Display Serving
	{
		$ass_step = $this->session->userdata('ass_step');

		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$serving = $this->S3QsfModel->s3w2autoDSMod();

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
	public function s3w3autoDSCont() // Auto Display Serving
	{
		$ass_step = $this->session->userdata('ass_step');

		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$serving = $this->S3QsfModel->s3w3autoDSMod();

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
	public function s3w4autoDSCont() // Auto Display Serving
	{
		$ass_step = $this->session->userdata('ass_step');

		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$serving = $this->S3QsfModel->s3w4autoDSMod();

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





	public function s3autoDQ()
	{
		$this->load->model("S3QsfModel");
		$ass_step = $this->session->userdata('ass_step');

		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}

		// Get pending queues filtered by step and category
		$queues = $this->S3QsfModel->s3getQueues($ass_step);

		if (!empty($queues)) {
			foreach ($queues as $row) {
				echo '<div class="d-grid gap-2 mt-1">
                <button class="btn ' . (($row->category == 'PRIORITY') ? 'btnCstmPriorityUpcoming btn-danger' : 'btnCstmRegularUpcoming btn-primary') . '">
                    ' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . ' - ' . $row->category . '
                </button>
            </div>';
			}
		} else {
			echo '<p>Empty</p>';
		}
	}

	public function jsonS3autoDQRegular()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$reguQueues = $this->S3QsfModel->jsonS3getReguQueue($ass_step);
		$json_data['data'] = $reguQueues;
		echo json_encode($json_data);
	}
	public function jsonS3W1QueRegCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$reguQueues = $this->S3QsfModel->jsonS3W1QueRegMod($ass_step);
		$json_data['data'] = $reguQueues;
		echo json_encode($json_data);
	}
	public function jsonS3W2QueRegCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$reguQueues = $this->S3QsfModel->jsonS3W2QueRegMod($ass_step);
		$json_data['data'] = $reguQueues;
		echo json_encode($json_data);
	}

	public function jsonS3W3QueRegCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$reguQueues = $this->S3QsfModel->jsonS3W3QueRegMod($ass_step);
		$json_data['data'] = $reguQueues;
		echo json_encode($json_data);
	}
	public function jsonS3W4QueRegCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$reguQueues = $this->S3QsfModel->jsonS3W4QueRegMod($ass_step);
		$json_data['data'] = $reguQueues;
		echo json_encode($json_data);
	}


	public function jsonS3autoDQPriority()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$reguQueues = $this->S3QsfModel->jsonS3getPrioQueue($ass_step);
		$json_data['data'] = $reguQueues;
		echo json_encode($json_data);
	}
	public function jsonS3W1QuePrioCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$reguQueues = $this->S3QsfModel->jsonS3W1QuePrioMod($ass_step);
		$json_data['data'] = $reguQueues;
		echo json_encode($json_data);
	}
	public function jsonS3W2QuePrioCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$reguQueues = $this->S3QsfModel->jsonS3W2QuePrioMod($ass_step);
		$json_data['data'] = $reguQueues;
		echo json_encode($json_data);
	}
	public function jsonS3W3QuePrioCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$reguQueues = $this->S3QsfModel->jsonS3W3QuePrioMod($ass_step);
		$json_data['data'] = $reguQueues;
		echo json_encode($json_data);
	}
	public function jsonS3W4QuePrioCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$reguQueues = $this->S3QsfModel->jsonS3W4QuePrioMod($ass_step);
		$json_data['data'] = $reguQueues;
		echo json_encode($json_data);
	}

	public function jsonS3autoDP()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: ass_step is not set in the session.";
			return;
		}
		$pending = $this->S3QsfModel->jsonS3getPend($ass_step);
		$json_data['data'] = $pending;
		echo json_encode($json_data);
	}
	public function jsonS3W1autoDPCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: ass_step is not set in the session.";
			return;
		}
		$pending = $this->S3QsfModel->jsonS3W1PendMod($ass_step);
		$json_data['data'] = $pending;
		echo json_encode($json_data);
	}

	public function jsonS3W2autoDPCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: ass_step is not set in the session.";
			return;
		}
		$pending = $this->S3QsfModel->jsonS3W2PendMod($ass_step);
		$json_data['data'] = $pending;
		echo json_encode($json_data);
	}
	public function jsonS3W3autoDPCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: ass_step is not set in the session.";
			return;
		}
		$pending = $this->S3QsfModel->jsonS3W3PendMod($ass_step);
		$json_data['data'] = $pending;
		echo json_encode($json_data);
	}
	public function jsonS3W4autoDPCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: ass_step is not set in the session.";
			return;
		}
		$pending = $this->S3QsfModel->jsonS3W4PendMod($ass_step);
		$json_data['data'] = $pending;
		echo json_encode($json_data);
	}
	public function qsfS3W1UpdPendCont($id)
	{
		$this->load->model('S3QsfModel');
		$this->S3QsfModel->qsfS3W1UpdPendMod($id);
		echo json_encode(['status' => 'success']);
	}
	public function qsfS3W2UpdPendCont($id)
	{
		$this->load->model('S3QsfModel');
		$this->S3QsfModel->qsfS3W2UpdPendMod($id);
		echo json_encode(['status' => 'success']);
	}
	public function qsfS3W3UpdPendCont($id)
	{
		$this->load->model('S3QsfModel');
		$this->S3QsfModel->qsfS3W3UpdPendMod($id);
		echo json_encode(['status' => 'success']);
	}
	public function qsfS3W4UpdPendCont($id)
	{
		$this->load->model('S3QsfModel');
		$this->S3QsfModel->qsfS3W4UpdPendMod($id);
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




	public function s3w1RegBtnCont()
	{
		$this->load->model('S3QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S3QsfModel->s3w1RegBtnMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}
	public function s3w2RegBtnCont()
	{
		$this->load->model('S3QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S3QsfModel->s3w2RegBtnMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}
	public function s3w3RegBtnCont()
	{
		$this->load->model('S3QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S3QsfModel->s3w3RegBtnMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}
	public function s3w4RegBtnCont()
	{
		$this->load->model('S3QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S3QsfModel->s3w4RegBtnMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}










	public function s3w1PrioBtnCont()
	{
		$this->load->model('S3QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S3QsfModel->s3w1PrioBtnMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}
	public function s3w2PrioBtnCont()
	{
		$this->load->model('S3QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S3QsfModel->s3w2PrioBtnMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}
	public function s3w3PrioBtnCont()
	{
		$this->load->model('S3QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S3QsfModel->s3w3PrioBtnMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}
	public function s3w4PrioBtnCont()
	{
		$this->load->model('S3QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S3QsfModel->s3w4PrioBtnMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}

	public function s3w1SkipCont()
	{
		$this->load->model('S3QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S3QsfModel->s3w1SkipMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}
	public function s3w2SkipCont()
	{
		$this->load->model('S3QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S3QsfModel->s3w2SkipMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}
	public function s3w3SkipCont()
	{
		$this->load->model('S3QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S3QsfModel->s3w3SkipMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}
	public function s3w4SkipCont()
	{
		$this->load->model('S3QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S3QsfModel->s3w4SkipMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}


	public function s3w1ProceedCont()
	{
		$this->load->model('S3QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S3QsfModel->s3w1ProceedMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}
	public function s3w2ProceedCont()
	{
		$this->load->model('S3QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S3QsfModel->s3w2ProceedMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}
	public function s3w3ProceedCont()
	{
		$this->load->model('S3QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S3QsfModel->s3w3ProceedMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}
	public function s3w4ProceedCont()
	{
		$this->load->model('S3QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S3QsfModel->s3w4ProceedMod($ass_step);
		echo json_encode(array('status' => 'success'));
	}
}
