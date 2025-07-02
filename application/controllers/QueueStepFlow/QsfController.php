<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property CI_Session $session
 * @property QsfModel $QsfModel
 * @property UserModel $UserModel
 */
class QsfController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('QsfModel');
		$this->load->model('UserModel');
		$this->load->library('session');
	}

	public function qsfs2w1PrioCont()
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
		$this->load->view('queueStepFlow/qsfS2W1Prio', $data);
		$this->load->view('template/footer');
	}
	public function qsfs2w2PrioCont()
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
		$this->load->view('queueStepFlow/qsfS2W2Prio', $data);
		$this->load->view('template/footer');
	}
	public function s2w1QuePrioCont()
	{
		$queues = $this->QsfModel->s2w1QuePrioMod();
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
	public function s2w2QuePrioCont()
	{
		$queues = $this->QsfModel->s2w2QuePrioMod();
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
	public function s2w1PendPrioCont()
	{
		$pending = $this->QsfModel->s2w1PendPrioMod();
		$json_data['data'] = $pending;
		echo json_encode($json_data);
	}
	public function s2w2PendPrioCont()
	{
		$pending = $this->QsfModel->s2w2PendPrioMod();
		$json_data['data'] = $pending;
		echo json_encode($json_data);
	}
	public function s2w1ServPrioCont()
	{
		$serving = $this->QsfModel->s2w1ServPrioMod();
		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketPrio">P-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '</h1>';
			}
		} else {
		}
	}
	public function s2w2ServPrioCont()
	{
		$serving = $this->QsfModel->s2w2ServPrioMod();
		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketPrio">P-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '</h1>';
			}
		} else {
		}
	}

	public function s2w1PrioBtnCont()
	{
		$this->load->model('QsfModel');
		$this->QsfModel->s2w1PrioBtnMod();
		echo json_encode(array('status' => 'success'));
	}
	public function s2w2PrioBtnCont()
	{
		$this->load->model('QsfModel');
		$this->QsfModel->s2w2PrioBtnMod();
		echo json_encode(array('status' => 'success'));
	}
	public function s2w1SkipPrioBtnCont()
	{
		$this->load->model('QsfModel');
		$this->QsfModel->s2w1SkipPrioBtnMod();
		echo json_encode(array('status' => 'success'));
	}
	public function s2w2SkipPrioBtnCont()
	{
		$this->load->model('QsfModel');
		$this->QsfModel->s2w2SkipPrioBtnMod();
		echo json_encode(array('status' => 'success'));
	}
	public function s2w1ProceedPrioBtnCont()
	{
		$this->load->model('QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$ass_category = $this->session->userdata('ass_category');
		$this->QsfModel->s2w1ProceedPrioBtnMod($ass_step, $ass_category);
		echo json_encode(array('status' => 'success'));
	}
	public function s2w2ProceedPrioBtnCont()
	{
		$this->load->model('QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$ass_category = $this->session->userdata('ass_category');
		$this->QsfModel->s2w2ProceedPrioBtnMod($ass_step, $ass_category);
		echo json_encode(array('status' => 'success'));
	}
	public function s2w1UpdPendPrioCont($id)
	{
		$this->load->model('QsfModel');
		$this->QsfModel->s2w1UpdPendPrioMod($id);
		echo json_encode(['status' => 'success']);
	}
	public function s2w2UpdPendPrioCont($id)
	{
		$this->load->model('QsfModel');
		$this->QsfModel->s2w2UpdPendPrioMod($id);
		echo json_encode(['status' => 'success']);
	}

	// STEP 2 REGULAR
	public function qsfs2w1ReguCont()
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
		$this->load->view('queueStepFlow/qsfS2W1Regu', $data);
		$this->load->view('template/footer');
	}
	public function qsfs2w2ReguCont()
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
		$this->load->view('queueStepFlow/qsfS2W2Regu', $data);
		$this->load->view('template/footer');
	}

	public function s2w1QueReguCont()
	{
		$queues = $this->QsfModel->s2w1QueReguMod();
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
	public function s2w2QueReguCont()
	{
		$queues = $this->QsfModel->s2w2QueReguMod();
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
	public function s2w3QueReguCont()
	{
		$queues = $this->QsfModel->s2w3QueReguMod();
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
	public function s2w1PendReguCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: ass_step is not set in the session.";
			return;
		}
		$pending = $this->QsfModel->s2w1PendReguMod($ass_step);
		$json_data['data'] = $pending;
		echo json_encode($json_data);
	}
	public function s2w2PendReguCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: ass_step is not set in the session.";
			return;
		}
		$pending = $this->QsfModel->s2w2PendReguMod($ass_step);
		$json_data['data'] = $pending;
		echo json_encode($json_data);
	}
	public function s2w3PendReguCont()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: ass_step is not set in the session.";
			return;
		}
		$pending = $this->QsfModel->s2w3PendReguMod($ass_step);
		$json_data['data'] = $pending;
		echo json_encode($json_data);
	}
	public function s2w1ServReguCont()
	{
		$serving = $this->QsfModel->s2w1ServReguMod();
		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketRegu">R-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '</h1>';
			}
		} else {
		}
	}
	public function s2w2ServReguCont()
	{
		$serving = $this->QsfModel->s2w2ServReguMod();
		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketRegu">R-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '</h1>';
			}
		} else {
		}
	}
	public function s2w3ServReguCont()
	{
		$serving = $this->QsfModel->s2w3ServReguMod();
		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketRegu">R-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '</h1>';
			}
		} else {
		}
	}

	public function s2w3ReguBtnCont()
	{
		$this->load->model('QsfModel');
		$this->QsfModel->s2w3ReguBtnMod();
		echo json_encode(array('status' => 'success'));
	}
	public function s2w2ReguBtnCont()
	{
		$this->load->model('QsfModel');
		$this->QsfModel->s2w2ReguBtnMod();
		echo json_encode(array('status' => 'success'));
	}
	public function s2w1ReguBtnCont()
	{
		$this->load->model('QsfModel');
		$this->QsfModel->s2w1ReguBtnMod();
		echo json_encode(array('status' => 'success'));
	}
	public function s2w1SkipReguBtnCont()
	{
		$this->load->model('QsfModel');
		$this->QsfModel->s2w1SkipReguBtnMod();
		echo json_encode(array('status' => 'success'));
	}
	public function s2w2SkipReguBtnCont()
	{
		$this->load->model('QsfModel');
		$this->QsfModel->s2w2SkipReguBtnMod();
		echo json_encode(array('status' => 'success'));
	}

	public function s2w1ProceedReguBtnCont()
	{
		$this->load->model('QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$ass_category = $this->session->userdata('ass_category');
		$this->QsfModel->s2ProceedReguBtnMod($ass_step, $ass_category);
		echo json_encode(array('status' => 'success'));
	}
	public function s2w2ProceedReguBtnCont()
	{
		$this->load->model('QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$ass_category = $this->session->userdata('ass_category');
		$this->QsfModel->s2w2ProceedReguBtnMod($ass_step, $ass_category);
		echo json_encode(array('status' => 'success'));
	}



	private function updatePendingRegu($modelMethod, $id)
	{
		$this->load->model('QsfModel');
		$this->QsfModel->$modelMethod($id);
		echo json_encode(['status' => 'success']);
	}
	public function s2w1UpdPendReguCont($id)
	{
		$this->updatePendingRegu('s2UpdatePendingReguMod', $id);
	}

	public function s2w2UpdPendReguCont($id)
	{
		$this->updatePendingRegu('s2UpdatePendingReguMod', $id);
	}












	public function s2w1CallPrioCont()
	{
		$this->load->model('QsfModel');
		$this->QsfModel->s2w1CallPrioMod();
		echo json_encode(array('status' => 'success'));
	}
	public function s2w2CallPrioCont()
	{
		$this->load->model('QsfModel');
		$this->QsfModel->s2w2CallPrioMod();
		echo json_encode(array('status' => 'success'));
	}

	public function s2w1CallReguCont()
	{
		$this->load->model('QsfModel');
		$this->QsfModel->s2w1CallReguMod();
		echo json_encode(array('status' => 'success'));
	}
	public function s2w2CallReguCont()
	{
		$this->load->model('QsfModel');
		$this->QsfModel->s2w2CallReguMod();
		echo json_encode(array('status' => 'success'));
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
























	public function s2w1prio()
	{
		$fname = $this->session->userdata('fname');
		$lname = $this->session->userdata('lname');
		$role = $this->session->userdata('role');
		$ass_step = $this->session->userdata('ass_step');
		$ass_window = $this->session->userdata('ass_window');
		$ass_category = $this->session->userdata('ass_category');
		$section = $this->session->userdata('section');

		$data = [
			'fname' => $fname,
			'lname' => $lname,
			'role' => $role,
			'ass_step' => $ass_step,
			'ass_window' => $ass_window,
			'ass_category' => $ass_category,
			'section' => $section
		];

		// $this->load->view('template/headerTest', $data);
		// $this->load->view('queueStepFlow/prioTestView', $data);

		$this->load->view('queueStepFlow/header');
		$this->load->view('queueStepFlow/s2w1prio', $data);
		$this->load->view('queueStepFlow/footer');
	}



	public function s2w1upcoming()
	{
		$queues = $this->QsfModel->s2w1upcoming();
		if (!empty($queues)) {
			foreach ($queues as $row) {
				echo '<div class="queues">A' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '</div>';
			}
		} else {
			// echo '<p>Empty</p>';
			echo '';
		}
	}
	public function s2w1pending()
	{
		$pending = $this->QsfModel->s2w1pending();
		$json_data['data'] = $pending;
		echo json_encode($json_data);
	}

	public function s2w1updatePendingCont($id = null)
	{
		if ($id === null) {
			$id = $this->input->post('id'); // Accept ID via POST if not in URL
		}

		$this->load->model('QsfModel');
		$this->QsfModel->s2w1updatePendingMod($id);
		echo json_encode(['status' => 'success']);
	}
	public function s2w1serve()
	{
		$serving = $this->QsfModel->s2w1serve();
		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<span>A' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '</span>';
			}
		} else {
		}
	}

	public function s2w1nextServeCont()
	{
		$this->load->model('QsfModel');
		$this->QsfModel->s2w1nextServeMod();
		echo json_encode(array('status' => 'success'));
	}

	public function s2w1nextSkipCont()
	{
		$this->load->model('QsfModel');
		$this->QsfModel->s2w1nextSkipMod();
		echo json_encode(array('status' => 'success'));
	}


	// public function s2w1ProceedPrioBtnCont()
	// {
	// 	$this->load->model('QsfModel');
	// 	$ass_step = $this->session->userdata('ass_step');
	// 	$ass_category = $this->session->userdata('ass_category');
	// 	$this->QsfModel->s2w1ProceedPrioBtnMod($ass_step, $ass_category);
	// 	echo json_encode(array('status' => 'success'));
	// }
}
