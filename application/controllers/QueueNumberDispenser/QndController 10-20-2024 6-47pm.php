<?php
defined('BASEPATH') or exit('No direct script access allowed');

class QndController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load the model in the constructor
        $this->load->model('QndModel');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->model("QndModel");
        $fname = $this->session->userdata('fname');
        $lname = $this->session->userdata('lname');
        $position = $this->session->userdata('position');
        $ass_step = $this->session->userdata('ass_step');
        $ass_category = $this->session->userdata('ass_category');
        $section = $this->session->userdata('section');
        $prioCat = $this->QndModel->getPrioCategory();
        $reguCat = $this->QndModel->getReguCategory();

        $data = [
            'gpc' => $prioCat,
            'grc' => $reguCat,
            'fname' => $fname,
            'lname' => $lname,
            'position' => $position,
            'ass_step' => $ass_step,
            'ac' => $ass_category,
            'sctn' => $section
        ];
        $this->load->view('queueNumberDispenser/header', $data);
        $this->load->view('queueNumberDispenser/qnd', $data);
        $this->load->view('queueNumberDispenser/footer');
    }

    public function fetchTran()
    {
        $this->load->model("QndModel");
        $trans = $this->QndModel->getTran();
        if (!empty($trans)) {
            foreach ($trans as $row) {

                echo '<tr>
                      <th scope="row">' . str_pad($row->queue_num, 3, '0', STR_PAD_LEFT) . '</th>
                      <td>' . $row->category . '</td>
                      <td>' . $row->datetoday . '</td>
                      <td>' . $row->step_id . '</td>
                      <td><span class="badge bg-warning">' . $row->status . '</span></td>
                    </tr>';
            }
        } else {
            echo '<p>Empty</p>';
        }
    }
}
