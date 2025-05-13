<?php
defined('BASEPATH') or exit('No direct script access allowed');

class S4QsfController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('S4QsfModel');
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
		$this->load->view('queueStepFlow/qsfS4', $data);
		$this->load->view('template/footer');
	}



	public function s4autoDS()
	{
		$ass_step = $this->session->userdata('ass_step');

		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$serving = $this->S4QsfModel->s4getServing();

		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="' . (($row->category == 'PRIORITY') ? 'serveTicketPrio' : 'serveTicketRegu') . '">
						' . (($row->category == 'REGULAR') ? 'R-' : 'P-') . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
					</h1>';
			}
		} else {
		}
	}

	/**/
	public function jsonS4autoDQRegular()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$reguQueues = $this->S4QsfModel->jsonS4getReguQueue($ass_step);
		$json_data['data'] = $reguQueues;
		echo json_encode($json_data);
	}

	public function jsonS4autoDQPriority()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$prioQueues = $this->S4QsfModel->jsonS4getPrioQueue($ass_step);
		$json_data['data'] = $prioQueues;
		echo json_encode($json_data);
	}



	public function jsonS4autoDP()
	{
		$ass_step = $this->session->userdata('ass_step');
		if (!$ass_step) {
			echo "Error: Not set in the session.";
			return;
		}
		$pending = $this->S4QsfModel->jsonS4getPend($ass_step);
		$json_data['data'] = $pending;
		echo json_encode($json_data);
	}

	public function s4nextRegular()
	{
		$this->load->model('S4QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S4QsfModel->s4nextRegularModel($ass_step);
		echo json_encode(array('status' => 'success'));
	}

	public function s4nextPriority()
	{
		$this->load->model('S4QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S4QsfModel->s4nextPrioModel($ass_step);
		echo json_encode(array('status' => 'success'));
	}

	public function s4skip()
	{
		$this->load->model('S4QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S4QsfModel->s4nextSkipModel($ass_step);
		echo json_encode(array('status' => 'success'));
	}


	public function s4proceed()
	{
		$this->load->model('S4QsfModel');
		$ass_step = $this->session->userdata('ass_step');
		$this->S4QsfModel->s4nextProceedModel($ass_step);
		echo json_encode(array('status' => 'success'));
	}
}
