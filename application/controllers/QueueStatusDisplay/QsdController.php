<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property CI_Session $session
 * @property QsdModel $QsdModel
 */
class QsdController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('QsdModel');
	}
	/*-------------------- PRIORITY CONTROLLERS --------------------*/
	public function qsdPrioCont()
	{
		$this->load->view('queueStatusDisplay/header');
		$queStep = $this->QsdModel->getQsdStepPrio();
		$queueNum = $this->QsdModel->getQsdQueuePrio();

		$data = [
			'queStep' => $queStep,
			'queueNum' => $queueNum
		];
		$this->load->view('queueStatusDisplay/qsdPriority', $data);
		$this->load->view('queueStatusDisplay/footer');
	}
	public function qsdPrioNewCont()
	{
		// $this->load->view('queueStatusDisplay/headerNew');
		// $queStep = $this->QsdModel->getQsdStepPrioNew();
		// $queueNum = $this->QsdModel->getQsdQueuePrioNew();

		// $data = [
		// 	'queStep' => $queStep,
		// 	'queueNum' => $queueNum
		// ];
		// $this->load->view('queueStatusDisplay/qsdPriorityNew', $data);
		$this->load->view('queueStatusDisplay/qsdPriorityNew');
		// $this->load->view('queueStatusDisplay/footer');
	}

































	private function displayTicket($modelMethod)
	{
		$serving = $this->QsdModel->$modelMethod();

		if (!empty($serving)) {
			foreach ($serving as $row) {
				if ($row->category === 'PRIORITY') {
					echo '<h1 class="serveTicketPrio">
                    P-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
                    </h1>';
				} else {
					echo '<h1 class="serveTicketRegu">
                    R-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
                    </h1>';
				}
			}
		}
	}

	public function s2w1PrioCont()
	{
		$this->displayTicket('s2w1PrioMod');
	}

	public function s2w2PrioCont()
	{
		$this->displayTicket('s2w2PrioMod');
	}

	public function s2w1ReguCont()
	{
		$this->displayTicket('s2w1ReguMod');
	}

	public function s2w2ReguCont()
	{
		$this->displayTicket('s2w2ReguMod');
	}

	public function s3w1Cont()
	{
		$this->displayTicket('s3w1Mod');
	}

	public function s3w2Cont()
	{
		$this->displayTicket('s3w2Mod');
	}

	public function s3w3Cont()
	{
		$this->displayTicket('s3w3Mod');
	}

	public function s3w4Cont()
	{
		$this->displayTicket('s3w4Mod');
	}

	public function s4w1Cont()
	{
		$this->displayTicket('s4w1Mod');
	}

	public function s4w2Cont()
	{
		$this->displayTicket('s4w2Mod');
	}

	public function s4w3Cont()
	{
		$this->displayTicket('s4w3Mod');
	}











	/*-------------------- REGULAR CONTROLLERS --------------------*/
	public function qsdRegCont()
	{
		$this->load->view('queueStatusDisplay/header');
		$queStep = $this->QsdModel->getQsdStepRegu();
		$queueNum = $this->QsdModel->getQsdQueueRegu();

		$data = [
			'queStep' => $queStep,
			'queueNum' => $queueNum
		];
		$this->load->view('queueStatusDisplay/qsdRegular', $data);
		$this->load->view('queueStatusDisplay/footer');
	}
	// private function displayRegTicket($modelMethod)
	// {
	// 	$serving = $this->QsdModel->$modelMethod();

	// 	if (!empty($serving)) {
	// 		foreach ($serving as $row) {
	// 			echo '<h1 class="serveTicketRegu">
	//               R-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
	//               </h1>';
	// 		}
	// 	}
	// }
	// public function s2w1ReguCont()
	// {
	// 	$this->displayRegTicket('s2w1RegMod');
	// }

	// public function s2w2ReguCont()
	// {
	// 	$this->displayRegTicket('s2w2RegMod');
	// }

	// public function s3w1ReguCont()
	// {
	// 	$this->displayRegTicket('s3w1RegMod');
	// }

	// public function s3w2ReguCont()
	// {
	// 	$this->displayRegTicket('s3w2RegMod');
	// }

	// public function s3w3ReguCont()
	// {
	// 	$this->displayRegTicket('s3w3RegMod');
	// }

	// public function s3w4ReguCont()
	// {
	// 	$this->displayRegTicket('s3w4RegMod');
	// }

	// public function s4w1ReguCont()
	// {
	// 	$this->displayRegTicket('s4w1RegMod');
	// }

	// public function s4w2ReguCont()
	// {
	// 	$this->displayRegTicket('s4w2RegMod');
	// }

	// public function s4w3ReguCont()
	// {
	// 	$this->displayRegTicket('s4w3RegMod');
	// }

	public function qsdFM()
	{

		$marquee = $this->QsdModel->qsdFMmodel();
		if (!empty($marquee)) {
			foreach ($marquee as $row) {
				echo '<div id="marqueeSlide" class="text-center h-100 d-flex" style="background-color:;">
                    <p class="qsdFooterFont col-6">' . $row->marquee_text1 . '</p>
                    <p class="qsdFooterFont col-6">' . $row->marquee_text2 . '</p>
                  </div>';
			}
		} else {
		}
	}













	public function abcdCont()
	{

		try {
			$updated = $this->QsdModel->abcdMod();

			echo json_encode(['success' => $updated]);
		} catch (Exception $e) {
			echo json_encode(['success' => false, 'error' => $e->getMessage()]);
		}
	}










	// FOR FETCHING VALUES FROM queue_num IN tbl_transactions
	private function mnjkli($modelMethod)
	{
		$serving = $this->QsdModel->$modelMethod();

		if (!empty($serving)) {
			foreach ($serving as $row) {
				if ($row->category === 'PRIORITY') {
					echo '<h1 class="serveTicketPrio">
                    P-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
                    </h1>';
				} else {
					echo '<h1 class="serveTicketRegu">
                    R-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
                    </h1>';
				}
			}
		}
	}

	public function hiddenS2w1PrioCont()
	{
		$this->mnjkli('hiddenS2w1PrioMod');
	}

	public function hiddenS2w2PrioCont()
	{
		$this->mnjkli('hiddenS2w2PrioMod');
	}

	public function hiddenS2w1ReguCont()
	{
		$this->mnjkli('hiddenS2w1ReguMod');
	}

	public function hiddenS2w2ReguCont()
	{
		$this->mnjkli('hiddenS2w2ReguMod');
	}

	public function hiddenS3w1Cont()
	{
		$this->mnjkli('hiddenS3w1Mod');
	}
	public function hiddenS3w2Cont()
	{
		$this->mnjkli('hiddenS3w2Mod');
	}
	public function hiddenS3w3Cont()
	{
		$this->mnjkli('hiddenS3w3Mod');
	}
	public function hiddenS3w4Cont()
	{
		$this->mnjkli('hiddenS3w4Mod');
	}
	public function hiddenS4w1Cont()
	{
		$this->mnjkli('hiddenS4w1Mod');
	}
	public function hiddenS4w2Cont()
	{
		$this->mnjkli('hiddenS4w2Mod');
	}
	public function hiddenS4w3Cont()
	{
		$this->mnjkli('hiddenS4w3Mod');
	}



	// FOR FETCHING call_num VALUE
	public function calls2w1PrioCont()
	{
		$abcdcall = $this->QsdModel->calls2w1PrioMod();
		if (!empty($abcdcall)) {
			foreach ($abcdcall as $row) {
				echo '<h2 class="qsdStepFont">' . ($row->call_num) . '</h2>';
			}
		} else {
		}
	}

	public function calls2w2PrioCont()
	{
		$abcdcall = $this->QsdModel->calls2w2PrioMod();
		if (!empty($abcdcall)) {
			foreach ($abcdcall as $row) {
				echo '<h2 class="qsdStepFont">' . ($row->call_num) . '</h2>';
			}
		} else {
		}
	}

	public function calls2w1ReguCont()
	{
		$abcdcall = $this->QsdModel->calls2w1ReguMod();
		if (!empty($abcdcall)) {
			foreach ($abcdcall as $row) {
				echo '<h2 class="qsdStepFont">' . ($row->call_num) . '</h2>';
			}
		} else {
		}
	}

	public function calls2w2ReguCont()
	{
		$abcdcall = $this->QsdModel->calls2w2ReguMod();
		if (!empty($abcdcall)) {
			foreach ($abcdcall as $row) {
				echo '<h2 class="qsdStepFont">' . ($row->call_num) . '</h2>';
			}
		} else {
		}
	}

	public function calls3w1Cont()
	{
		$abcdcall = $this->QsdModel->calls3w1Mod();
		if (!empty($abcdcall)) {
			foreach ($abcdcall as $row) {
				echo '<h2 class="qsdStepFont">' . ($row->call_num) . '</h2>';
			}
		} else {
		}
	}
	public function calls3w2Cont()
	{
		$abcdcall = $this->QsdModel->calls3w2Mod();
		if (!empty($abcdcall)) {
			foreach ($abcdcall as $row) {
				echo '<h2 class="qsdStepFont">' . ($row->call_num) . '</h2>';
			}
		} else {
		}
	}
	public function calls3w3Cont()
	{
		$abcdcall = $this->QsdModel->calls3w3Mod();
		if (!empty($abcdcall)) {
			foreach ($abcdcall as $row) {
				echo '<h2 class="qsdStepFont">' . ($row->call_num) . '</h2>';
			}
		} else {
		}
	}
	public function calls3w4Cont()
	{
		$abcdcall = $this->QsdModel->calls3w4Mod();
		if (!empty($abcdcall)) {
			foreach ($abcdcall as $row) {
				echo '<h2 class="qsdStepFont">' . ($row->call_num) . '</h2>';
			}
		} else {
		}
	}
	public function calls4w1Cont()
	{
		$abcdcall = $this->QsdModel->calls4w1Mod();
		if (!empty($abcdcall)) {
			foreach ($abcdcall as $row) {
				echo '<h2 class="qsdStepFont">' . ($row->call_num) . '</h2>';
			}
		} else {
		}
	}
	public function calls4w2Cont()
	{
		$abcdcall = $this->QsdModel->calls4w2Mod();
		if (!empty($abcdcall)) {
			foreach ($abcdcall as $row) {
				echo '<h2 class="qsdStepFont">' . ($row->call_num) . '</h2>';
			}
		} else {
		}
	}
	public function calls4w3Cont()
	{
		$abcdcall = $this->QsdModel->calls4w3Mod();
		if (!empty($abcdcall)) {
			foreach ($abcdcall as $row) {
				echo '<h2 class="qsdStepFont">' . ($row->call_num) . '</h2>';
			}
		} else {
		}
	}

	// public function updateQsdCallStat()
	// {
	// 	$this->load->model('QsdModel');
	// 	$this->QsdModel->resetCallStatForPriority();
	// 	echo json_encode(['status' => 'success']);
	// }
}
