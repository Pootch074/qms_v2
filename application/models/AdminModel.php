<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AdminModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }



    public function fetchAccMod()
    {
        $this->db->where('status', 'Approved');
        $hfgsv = $this->db->get('qms_users');
        return $hfgsv->result();
    }
    /* 
    public function fetchAccMod()
    {
        $hfgsv = $this->db->get('qms_users');
        $result = $hfgsv->result();
        return $result;
    }
    */
    public function fetchAccReqMod()
    {
        $this->db->where('status', 'Pending');
        $query = $this->db->get('qms_users');
        return $query->result();
    }

    public function approveUserReqMod($id)
    {
        $this->db->where('id', $id);
        return $this->db->update('qms_users', ['status' => 'Approved']);
    }

    public function asdasddsaMod($user_id)
    {
        $this->db->where('id', $user_id);
        return $this->db->delete('qms_users');
    }
}
