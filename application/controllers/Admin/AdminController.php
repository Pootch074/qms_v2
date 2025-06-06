<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property CI_Session $session
 * @property AdminModel $AdminModel
 * @property UserModel $UserModel
 */
class AdminController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel');
        $this->load->model('UserModel');
    }

    public function adminCont()
    {
        $role = $this->session->userdata('role');
        $position = $this->session->userdata('position');
        $data = [
            'role' => $role,
            'position' => $position
        ];
        $this->load->view('administrator/header', $data);
        $this->load->view('administrator/sidebar');
        $this->load->view('administrator/admin');
        $this->load->view('administrator/footer');
    }


    public function accCont()
    {
        $role = $this->session->userdata('role');
        $data = [
            'role' => $role,
        ];
        $this->load->view('administrator/header', $data);
        $this->load->view('administrator/sidebar');
        $this->load->view('administrator/accounts');
        $this->load->view('administrator/footer');
    }

    public function accReqCont()
    {
        $role = $this->session->userdata('role');
        $data = [
            'role' => $role,
        ];
        $this->load->view('administrator/header', $data);
        $this->load->view('administrator/sidebar');
        $this->load->view('administrator/accRequest');
        $this->load->view('administrator/footer');
    }
    public function displayCont()
    {
        $role = $this->session->userdata('role');
        $data = [
            'role' => $role,
        ];
        $this->load->view('administrator/header', $data);
        $this->load->view('administrator/sidebar');
        $this->load->view('administrator/display');
        $this->load->view('administrator/footer');
    }




    public function fetchAccCont()
    {
        $vbdj = $this->AdminModel->fetchAccMod();
        $json_data['data'] = $vbdj;
        echo json_encode($json_data);
    }
    public function fetchAccReqCont()
    {
        $vbdj = $this->AdminModel->fetchAccReqMod();
        $json_data['data'] = $vbdj;
        echo json_encode($json_data);
    }

    public function approveUserReqCont()
    {
        $id = $this->input->post('id');

        if ($id) {
            $result = $this->AdminModel->approveUserReqMod($id);

            if ($result) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false, 'message' => 'Database update failed']);
            }
        } else {
            echo json_encode(['success' => false, 'message' => 'Invalid ID']);
        }
    }

    public function asdasddsaCont()
    {
        $user_id = $this->input->post('user_id'); // ✅ Get user_id from the form

        $checking = $this->AdminModel->asdasddsaMod($user_id);

        if ($checking) {
            $this->session->set_flashdata('status', 'User deleted successfully!');
        } else {
            $this->session->set_flashdata('status', 'Failed to delete user.');
        }

        redirect(base_url('accounts'));
    }
}
