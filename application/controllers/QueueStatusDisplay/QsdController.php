<?php
defined('BASEPATH') or exit('No direct script access allowed');

class QsdController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('QsdModel');
	}

	public function qsdPriorityCont()
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

	public function s2PrioCont()
	{

		$serving = $this->QsdModel->s2Mod();

		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketPrio">
                  P-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
              		</h1>';
			}
		} else {
		}
	}
	public function s2RegCont()
	{

		$serving = $this->QsdModel->s2RegMod();

		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketRegu">
                  R-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
              		</h1>';
			}
		} else {
		}
	}

	public function s3w1PrioCont()
	{

		$serving = $this->QsdModel->s3w1PrioMod();

		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketPrio">
                  P-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
              		</h1>';
			}
		} else {
		}
	}
	public function s3w1RegCont()
	{

		$serving = $this->QsdModel->s3w1RegMod();

		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketRegu">
                  R-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
              		</h1>';
			}
		} else {
		}
	}

	public function s3w2PrioCont()
	{

		$serving = $this->QsdModel->s3w2PrioMod();

		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketPrio">
                  P-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
              		</h1>';
			}
		} else {
		}
	}
	public function s3w2RegCont()
	{

		$serving = $this->QsdModel->s3w2RegMod();

		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketRegu">
                  R-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
              		</h1>';
			}
		} else {
		}
	}

	public function s3w3PrioCont()
	{

		$serving = $this->QsdModel->s3w3PrioMod();

		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketPrio">
                  P-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
              		</h1>';
			}
		} else {
		}
	}
	public function s3w3RegCont()
	{

		$serving = $this->QsdModel->s3w3RegMod();

		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketRegu">
                  R-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
              		</h1>';
			}
		} else {
		}
	}

	public function s4w1PrioCont()
	{

		$serving = $this->QsdModel->s4w1PrioMod();

		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketPrio">
                  P-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
              		</h1>';
			}
		} else {
		}
	}
	public function s4w1RegCont()
	{

		$serving = $this->QsdModel->s4w1RegMod();

		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketRegu">
                  R-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
              		</h1>';
			}
		} else {
		}
	}
	public function s4w2PrioCont()
	{

		$serving = $this->QsdModel->s4w2PrioMod();

		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketPrio">
                  P-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
              		</h1>';
			}
		} else {
		}
	}
	public function s4w2RegCont()
	{

		$serving = $this->QsdModel->s4w2RegMod();

		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketRegu">
                  R-' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
              		</h1>';
			}
		} else {
		}
	}

	public function qsdStep3Prio()
	{

		$serving = $this->QsdModel->qsdS3PrioModel();

		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketPrio">
                  P' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '
              		</h1>';
			}
		} else {
		}
	}

	public function qsdS2ReguCont()
	{

		$serving = $this->QsdModel->qsdS2ReguModel();
		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class="serveTicketRegu">
                  R' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . ' ' . $row->step_id . '
              		</h1>';
			}
		} else {
		}
	}

	public function qsdS3()
	{

		$serving = $this->QsdModel->qsdS3Model();

		if (!empty($serving)) {
			foreach ($serving as $row) {
				echo '<h1 class=" ' . (($row->category == 'REGULAR') ? 'serveTicketRegu' : 'serveTicketPrio') . '">
                  ' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . ' - ' . $row->category . '
              		</h1>';
			}
		} else {
		}
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
}
