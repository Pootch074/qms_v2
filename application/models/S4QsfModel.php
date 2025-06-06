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
    public function jsonS4W1QueRegMod()
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
    public function jsonS4W2QueRegMod()
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
    public function jsonS4W3QueRegMod()
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

    public function jsonS4W1QuePrioMod()
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
    public function jsonS4W2QuePrioMod()
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
    public function jsonS4W3QuePrioMod()
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



    public function jsonS4W1PendMod()
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
    public function jsonS4W2PendMod()
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
    public function jsonS4W3PendMod()
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

    public function qsfS4W1UpdPendMod($id)
    {
        $this->db->where('id', $id);
        $this->db->where('status', 2);
        $this->db->where('step_id', 4);
        $this->db->update('tbl_transactions', array('step_id' => null, 'window_id' => null, 'status' => 'SERVED'));
    }
    public function qsfS4W2UpdPendMod($id)
    {
        $this->db->where('id', $id);
        $this->db->where('status', 2);
        $this->db->where('step_id', 4);
        $this->db->update('tbl_transactions', array('step_id' => null, 'window_id' => null, 'status' => 'SERVED'));
    }
    public function qsfS4W3UpdPendMod($id)
    {
        $this->db->where('id', $id);
        $this->db->where('status', 2);
        $this->db->where('step_id', 4);
        $this->db->update('tbl_transactions', array('step_id' => null, 'window_id' => null, 'status' => 'SERVED'));
    }


    private function getS4AutoDS($windowId)
    {
        return $this->db
            ->where('status', 1)
            ->where('step_id', 4)
            ->where('window_id', $windowId)
            ->get('tbl_transactions')
            ->result();
    }

    public function s4w1autoDSMod()
    {
        return $this->getS4AutoDS(1);
    }

    public function s4w2autoDSMod()
    {
        return $this->getS4AutoDS(2);
    }

    public function s4w3autoDSMod()
    {
        return $this->getS4AutoDS(3);
    }




    // REGULAR BUTTON STATUS = 1
    public function s4w1RegBtnMod()
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
            $this->db->update('tbl_transactions', array('status' => 1, 'window_id' => 1));
        }
    }
    public function s4w2RegBtnMod()
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
            $this->db->update('tbl_transactions', array('status' => 1, 'window_id' => 2));
        }
    }
    public function s4w3RegBtnMod()
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
            $this->db->update('tbl_transactions', array('status' => 1, 'window_id' => 3));
        }
    }

    private function prioritizeTransaction($windowId)
    {
        $query = $this->db
            ->where('status', 0)
            ->where('step_id', 4)
            ->where('category', 'PRIORITY')
            ->limit(1)
            ->get('tbl_transactions');

        if ($query->num_rows() > 0) {
            $row = $query->row();
            $this->db->where('id', $row->id)
                ->update('tbl_transactions', ['status' => 1, 'window_id' => $windowId]);
        }
    }

    public function s4w1PrioBtnMod()
    {
        $this->prioritizeTransaction(1);
    }

    public function s4w2PrioBtnMod()
    {
        $this->prioritizeTransaction(2);
    }

    public function s4w3PrioBtnMod()
    {
        $this->prioritizeTransaction(3);
    }


    private function skipTransaction($windowId)
    {
        $query = $this->db
            ->where('status', 1)
            ->where('step_id', 4)
            ->where('window_id', $windowId)
            ->limit(1)
            ->get('tbl_transactions');

        if ($query->num_rows() > 0) {
            $row = $query->row();
            $this->db->where('id', $row->id)
                ->update('tbl_transactions', ['status' => 2, 'window_id' => null]);
        }
    }

    public function s4w1SkipMod()
    {
        $this->skipTransaction(1);
    }

    public function s4w2SkipMod()
    {
        $this->skipTransaction(2);
    }

    public function s4w3SkipMod()
    {
        $this->skipTransaction(3);
    }


    public function s4w1ProceedMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 4);
        $this->db->where('window_id', 1);
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');

        if ($query->num_rows() > 0) {
            $row = $query->row();

            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('step_id' => null, 'window_id' => null,  'status' => 'SERVED'));
        }
    }
    public function s4w2ProceedMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 4);
        $this->db->where('window_id', 2);
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');

        if ($query->num_rows() > 0) {
            $row = $query->row();

            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('step_id' => null, 'window_id' => null,  'status' => 'SERVED'));
        }
    }
    public function s4w3ProceedMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 4);
        $this->db->where('window_id', 3);
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');

        if ($query->num_rows() > 0) {
            $row = $query->row();

            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('step_id' => null, 'window_id' => null,  'status' => 'SERVED'));
        }
    }
}
