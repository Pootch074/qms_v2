<?php
defined('BASEPATH') or exit('No direct script access allowed');

class QndController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Manila');
        $this->load->model('QndModel');
        $this->load->library('session');
    }

    private function loadQndView($viewName)
    {
        $this->load->model("QndModel");
        $data = [
            'zxcvbnm'   => $this->session->userdata('ass_category'),
            'fname'     => $this->session->userdata('fname'),
            'lname'     => $this->session->userdata('lname'),
            'position'  => $this->session->userdata('position'),
            'ass_step'  => $this->session->userdata('ass_step'),
            'sctn'      => $this->session->userdata('section')
        ];
        $this->load->view('template/header', $data);
        $this->load->view("queueNumberDispenser/{$viewName}", $data);
        $this->load->view('template/footer');
    }

    public function qndP()
    {
        $this->loadQndView('qndPriority');
    }

    public function qndR()
    {
        $this->loadQndView('qndRegular');
    }


    public function addQuePrio()
    {
        $newQueueData = $this->QndModel->insertNewQueuePrio();
        if ($newQueueData) {
            $newQueueNumber = $newQueueData['queue_num'];
            $formattedDate = $newQueueData['datetoday'];
            echo json_encode(['success' => true, 'queue_num' => $newQueueNumber, 'date_time' => $formattedDate]);
        } else {
            echo json_encode(['success' => false]);
        }
    }

    public function addQueRegu()
    {
        $newQueueData = $this->QndModel->insertNewQueueRegu();
        if ($newQueueData) {
            $newQueueNumber = $newQueueData['queue_num'];
            $formattedDate = $newQueueData['datetoday'];
            echo json_encode(['success' => true, 'queue_num' => $newQueueNumber, 'date_time' => $formattedDate]);
        } else {
            echo json_encode(['success' => false]);
        }
    }

    public function fetchJsonReguCont()
    {
        $example = $this->QndModel->fetchJsonRegu();
        $json_data['data'] = $example;
        echo json_encode($json_data);
    }

    public function fetchJsonPrioCont()
    {
        $example = $this->QndModel->fetchJsonPrio();
        $json_data['data'] = $example;
        echo json_encode($json_data);
    }
}
