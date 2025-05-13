<?php
defined('BASEPATH') or exit('No direct script access allowed');
class S4QsfModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    /**/
    public function jsonS4getReguQueue()
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', 4);
        $this->db->where('category', 'REGULAR');
        $this->db->order_by('queue_num', 'ASC');
        $query = $this->db->get('tbl_transactions');
        $result = $query->result();
        foreach ($result as $row) {
            $row->queue_num = str_pad($row->queue_num, 3, '0', STR_PAD_LEFT);
        }
        return $result;
    }

    public function jsonS4getPrioQueue()
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', 4);
        $this->db->where('category', 'PRIORITY');
        $this->db->order_by('queue_num', 'ASC');
        $query = $this->db->get('tbl_transactions');
        $result = $query->result();
        foreach ($result as $row) {
            $row->queue_num = str_pad($row->queue_num, 3, '0', STR_PAD_LEFT);
        }
        return $result;
    }



    public function jsonS4getPend()
    {
        $this->db->where('status', 2);
        $this->db->where('step_id', 4);
        $this->db->order_by('category', 'ASC');
        $query = $this->db->get('tbl_transactions');
        $result = $query->result();
        foreach ($result as $row) {
            $row->queue_num = str_pad($row->queue_num, 3, '0', STR_PAD_LEFT);
        }
        return $result;
    }









    public function s4getServing()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 4);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }



    // REGULAR BUTTON STATUS = 1
    public function s4nextRegularModel()
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', 4);
        $this->db->where('category', 'REGULAR');
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');
        if ($query->num_rows() > 0) {
            $row = $query->row();

            // Update the status of the found row to 1
            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('status' => 1));
        }
    }

    // PRIORITY BUTTON STATUS = 1
    public function s4nextPrioModel()
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', 4);
        $this->db->where('category', 'PRIORITY');
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');
        if ($query->num_rows() > 0) {
            $row = $query->row();

            // Update the status of the found row to 1
            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('status' => 1));
        }
    }

    public function s4nextSkipModel($ass_step)
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', $ass_step);
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');

        if ($query->num_rows() > 0) {
            $row = $query->row();

            // Update the status of the found row to 2 (or skipped)
            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('status' => 2));
        }
    }

    public function s4nextProceedModel()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 4);
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');

        if ($query->num_rows() > 0) {
            $row = $query->row();

            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('step_id' =>  0, 'status' => 'CLAIMED'));
        }
    }
}
