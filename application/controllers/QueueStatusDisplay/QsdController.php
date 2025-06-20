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

	private function displayPrioTicket($modelMethod)
	{
		$serving = $this->QsdModel->$modelMethod();

		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketPrio">
                  P-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
                  </h1>';
			}
		}
	}
	public function s2w1PrioCont()
	{
		$this->displayPrioTicket('s2Mod');
	}

	public function s2w2PrioCont()
	{
		$this->displayPrioTicket('s2w2Mod');
	}

	public function s3w1PrioCont()
	{
		$this->displayPrioTicket('s3w1PrioMod');
	}

	public function s3w2PrioCont()
	{
		$this->displayPrioTicket('s3w2PrioMod');
	}

	public function s3w3PrioCont()
	{
		$this->displayPrioTicket('s3w3PrioMod');
	}

	public function s3w4PrioCont()
	{
		$this->displayPrioTicket('s3w4PrioMod');
	}

	public function s4w1PrioCont()
	{
		$this->displayPrioTicket('s4w1PrioMod');
	}

	public function s4w2PrioCont()
	{
		$this->displayPrioTicket('s4w2PrioMod');
	}

	public function s4w3PrioCont()
	{
		$this->displayPrioTicket('s4w3PrioMod');
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
	private function displayRegTicket($modelMethod)
	{
		$serving = $this->QsdModel->$modelMethod();

		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketRegu">
                  R-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
                  </h1>';
			}
		}
	}
	public function s2w1RegCont()
	{
		$this->displayRegTicket('s2w1RegMod');
	}

	public function s2w2RegCont()
	{
		$this->displayRegTicket('s2w2RegMod');
	}

	public function s3w1RegCont()
	{
		$this->displayRegTicket('s3w1RegMod');
	}

	public function s3w2RegCont()
	{
		$this->displayRegTicket('s3w2RegMod');
	}

	public function s3w3RegCont()
	{
		$this->displayRegTicket('s3w3RegMod');
	}

	public function s3w4RegCont()
	{
		$this->displayRegTicket('s3w4RegMod');
	}

	public function s4w1RegCont()
	{
		$this->displayRegTicket('s4w1RegMod');
	}

	public function s4w2RegCont()
	{
		$this->displayRegTicket('s4w2RegMod');
	}

	public function s4w3RegCont()
	{
		$this->displayRegTicket('s4w3RegMod');
	}

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











	private function mnjkli($modelMethod)
	{
		$serving = $this->QsdModel->$modelMethod();

		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketPrio">
                  P-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
                  </h1>';
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


	public function updateQsdCallStat()
	{
		$this->load->model('QsdModel');
		$this->QsdModel->resetCallStatForPriority();
		echo json_encode(['status' => 'success']);
	}



	public function calls2w1Cont()
	{
		$abcdcall = $this->QsdModel->calls2w1Mod();
		if (!empty($abcdcall)) {
			foreach ($abcdcall as $row) {
				echo '<h2 class="qsdStepFont">' . ($row->call_num) . '</h2>';
			}
		} else {
		}
	}

	public function calls2w2Cont()
	{
		$abcdcall = $this->QsdModel->calls2w2Mod();
		if (!empty($abcdcall)) {
			foreach ($abcdcall as $row) {
				echo '<h2 class="qsdStepFont">' . ($row->call_num) . '</h2>';
			}
		} else {
		}
	}
}
