<?php
defined('BASEPATH') or exit('No direct script access allowed');
class QsfModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //============================== STEP 2 PRIORITY ==============================//
    public function s2autoDQPrioMod()
    {
        $this->db->where('status', 0);
        $this->db->where('category', 'PRIORITY');
        $this->db->where('step_id', 2);
        $this->db->order_by('queue_num', 'ASC');
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }
    public function s2autoDPPrioMod()
    {
        $this->db->where('status', 2);
        $this->db->where('step_id', 2);
        $this->db->where('category', 'PRIORITY');
        $this->db->order_by('queue_num', 'ASC');
        $query = $this->db->get('tbl_transactions');
        $result = $query->result();
        foreach ($result as $row) {
            $row->queue_num = str_pad($row->queue_num, 3, '0', STR_PAD_LEFT);
        }
        return $result;
    }
    public function s2autoDSPrioMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 2);
        $this->db->where('category', 'PRIORITY');
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }

    public function s2PrioBtnMod()
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', 2);
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
    public function s2SkipPrioBtnMod()
    {
        // Find the transaction where status is 1, ass_step matches, and ass_category matches
        $this->db->where('status', 1);
        $this->db->where('step_id', 2); // SKIP IF STEP MATCHES
        $this->db->where('category', 'PRIORITY'); // SKIP IF CATEGORY MATCHES
        $this->db->limit(1);

        $query = $this->db->get('tbl_transactions');

        // Check if a row is found
        if ($query->num_rows() > 0) {
            $row = $query->row();

            // Update the status of the found row to 2 (or skipped)
            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('status' => 2));
        }
    }
    public function s2ProceedPrioBtnMod()
    {
        // Retrieve the transaction record that needs updating
        $this->db->where('status', 1);
        $this->db->where('step_id', 2);
        $this->db->where('category', 'PRIORITY');
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');

        if ($query->num_rows() > 0) {
            $row = $query->row();

            // Check if all window_id values are 0 for category 'PRIORITY'
            $this->db->where('category', 'PRIORITY');
            $this->db->where('window_id !=', 0);
            $non_zero_window_query = $this->db->get('tbl_transactions');

            if ($non_zero_window_query->num_rows() == 0) {
                // If all window_id values for 'PRIORITY' are 0, set the next window_id to 1
                $next_window_id = 1;
            } else {
                // Get the last non-zero window_id for 'PRIORITY', ordered by queue_num in descending order
                $this->db->select('window_id');
                $this->db->where('step_id', 3);
                $this->db->where('category', 'PRIORITY');
                $this->db->where('window_id !=', 0);
                $this->db->order_by('queue_num', 'DESC');
                $this->db->limit(1);
                $last_window_query = $this->db->get('tbl_transactions');

                // Get the last assigned non-zero window_id
                $last_window_id = $last_window_query->row()->window_id;

                // Determine the next window_id in the cycle (1, 2, 3)
                $next_window_id = ($last_window_id % 3) + 1;
            }

            // Update the transaction with the calculated next window_id
            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('window_id' => $next_window_id, 'step_id' => 3, 'status' => 0));
        }
    }



    public function s2UpdatePendingPrioMod($id)
    {
        $this->db->where('id', $id);
        $this->db->where('status', 2);
        $this->db->where('step_id', 2);
        $this->db->where('category', 'PRIORITY');
        $this->db->update('tbl_transactions', array('step_id' => 3, 'status' => 0));
    }


    //============================== STEP 2 REGULAR ==============================//
    public function s2autoDQReguMod()
    {
        $this->db->where('status', 0);
        $this->db->where('category', 'REGULAR');
        $this->db->where('step_id', 2);
        $this->db->order_by('queue_num', 'ASC');
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }
    public function s2autoDPReguMod()
    {
        $this->db->where('status', 2);
        $this->db->where('step_id', 2);
        $this->db->where('category', 'REGULAR');
        $this->db->order_by('queue_num', 'ASC');
        $query = $this->db->get('tbl_transactions');
        $result = $query->result();
        foreach ($result as $row) {
            $row->queue_num = str_pad($row->queue_num, 3, '0', STR_PAD_LEFT);
        }
        return $result;
    }
    public function s2autoDSReguMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 2);
        $this->db->where('category', 'REGULAR');
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }

    public function s2ReguBtnMod()
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', 2);
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
    public function s2SkipReguBtnMod()
    {
        // Find the transaction where status is 1, ass_step matches, and ass_category matches
        $this->db->where('status', 1);
        $this->db->where('step_id', 2); // SKIP IF STEP MATCHES
        $this->db->where('category', 'REGULAR'); // SKIP IF CATEGORY MATCHES
        $this->db->limit(1);

        $query = $this->db->get('tbl_transactions');

        // Check if a row is found
        if ($query->num_rows() > 0) {
            $row = $query->row();

            // Update the status of the found row to 2 (or skipped)
            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('status' => 2));
        }
    }
    public function s2ProceedReguBtnMod()
    {
        // Retrieve the transaction record that needs updating
        $this->db->where('status', 1);
        $this->db->where('step_id', 2);
        $this->db->where('category', 'REGULAR');
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');

        if ($query->num_rows() > 0) {
            $row = $query->row();

            // Check if all window_id values are 0 for category 'REGULAR'
            //$this->db->where('step_id', 2);
            $this->db->where('category', 'REGULAR');
            $this->db->where('window_id !=', 0);
            $non_zero_window_query = $this->db->get('tbl_transactions');

            if ($non_zero_window_query->num_rows() == 0) {
                // If all window_id values for 'REGULAR' are 0, set the next window_id to 1
                $next_window_id = 1;
            } else {
                // Get the last non-zero window_id for 'REGULAR', ordered by queue_num in descending order
                $this->db->select('window_id');
                $this->db->where('step_id', 3);
                $this->db->where('category', 'REGULAR');
                $this->db->where('window_id !=', 0);
                $this->db->order_by('queue_num', 'DESC');
                $this->db->limit(1);
                $last_window_query = $this->db->get('tbl_transactions');

                // Get the last assigned non-zero window_id
                $last_window_id = $last_window_query->row()->window_id;

                // Determine the next window_id in the cycle (1, 2, 3)
                $next_window_id = ($last_window_id % 3) + 1;
            }

            // Update the transaction with the calculated next window_id
            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('window_id' => $next_window_id, 'step_id' => 3, 'status' => 0));
        }
    }
    public function s2UpdatePendingReguMod($id)
    {
        $this->db->where('id', $id);
        $this->db->where('status', 2);
        $this->db->where('step_id', 2);
        $this->db->where('category', 'REGULAR');
        $this->db->update('tbl_transactions', array('step_id' => 3, 'status' => 0));
    }







































    public function nextCall($ass_step, $ass_category)
    {
        // Find the transaction where status is 1, ass_step matches, and ass_category matches
        $this->db->where('status', 1);
        $this->db->where('step_id', $ass_step); // SKIP IF STEP MATCHES
        $this->db->where('category', $ass_category); // SKIP IF CATEGORY MATCHES
        $this->db->limit(1);

        $query = $this->db->get('tbl_transactions');

        // Check if a row is found
        if ($query->num_rows() > 0) {
            $row = $query->row();

            // Update the status of the found row to 2 (or skipped)
            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('call_status' => 5));
        }
    }
}
