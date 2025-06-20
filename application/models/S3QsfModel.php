<?php
defined('BASEPATH') or exit('No direct script access allowed');
class S3QsfModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function s3getQueues($userStep)
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', $userStep);
        $this->db->order_by('queue_num', 'ASC');
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }

    public function jsonS3getReguQueue()
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', 3);
        $this->db->where('category', 'REGULAR');
        $this->db->order_by('queue_num', 'ASC');
        $query = $this->db->get('tbl_transactions');
        $result = $query->result();
        foreach ($result as $row) {
            $row->queue_num = str_pad($row->queue_num, 3, '0', STR_PAD_LEFT);
        }
        return $result;
    }

    public function jsonS3W1QueRegMod()
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', 3);
        $this->db->where('category', 'REGULAR');
        $this->db->order_by('queue_num', 'ASC');
        $query = $this->db->get('tbl_transactions');
        $result = $query->result();
        foreach ($result as $row) {
            $row->queue_num = str_pad($row->queue_num, 3, '0', STR_PAD_LEFT);
        }
        return $result;
    }
    public function jsonS3W2QueRegMod()
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', 3);
        $this->db->where('category', 'REGULAR');
        $this->db->order_by('queue_num', 'ASC');
        $query = $this->db->get('tbl_transactions');
        $result = $query->result();
        foreach ($result as $row) {
            $row->queue_num = str_pad($row->queue_num, 3, '0', STR_PAD_LEFT);
        }
        return $result;
    }
    public function jsonS3W3QueRegMod()
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', 3);
        $this->db->where('category', 'REGULAR');
        $this->db->order_by('queue_num', 'ASC');
        $query = $this->db->get('tbl_transactions');
        $result = $query->result();
        foreach ($result as $row) {
            $row->queue_num = str_pad($row->queue_num, 3, '0', STR_PAD_LEFT);
        }
        return $result;
    }
    public function jsonS3W4QueRegMod()
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', 3);
        $this->db->where('category', 'REGULAR');
        $this->db->order_by('queue_num', 'ASC');
        $query = $this->db->get('tbl_transactions');
        $result = $query->result();
        foreach ($result as $row) {
            $row->queue_num = str_pad($row->queue_num, 3, '0', STR_PAD_LEFT);
        }
        return $result;
    }




    public function jsonS3getPrioQueue()
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', 3);
        $this->db->where('category', 'PRIORITY');
        $this->db->order_by('queue_num', 'ASC');
        $query = $this->db->get('tbl_transactions');
        $result = $query->result();
        foreach ($result as $row) {
            $row->queue_num = str_pad($row->queue_num, 3, '0', STR_PAD_LEFT);
        }
        return $result;
    }
    public function jsonS3W1QuePrioMod()
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', 3);
        $this->db->where('category', 'PRIORITY');
        $this->db->order_by('queue_num', 'ASC');
        $query = $this->db->get('tbl_transactions');
        $result = $query->result();
        foreach ($result as $row) {
            $row->queue_num = str_pad($row->queue_num, 3, '0', STR_PAD_LEFT);
        }
        return $result;
    }
    public function jsonS3W2QuePrioMod()
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', 3);
        $this->db->where('category', 'PRIORITY');
        $this->db->order_by('queue_num', 'ASC');
        $query = $this->db->get('tbl_transactions');
        $result = $query->result();
        foreach ($result as $row) {
            $row->queue_num = str_pad($row->queue_num, 3, '0', STR_PAD_LEFT);
        }
        return $result;
    }
    public function jsonS3W3QuePrioMod()
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', 3);
        $this->db->where('category', 'PRIORITY');
        $this->db->order_by('queue_num', 'ASC');
        $query = $this->db->get('tbl_transactions');
        $result = $query->result();
        foreach ($result as $row) {
            $row->queue_num = str_pad($row->queue_num, 3, '0', STR_PAD_LEFT);
        }
        return $result;
    }
    public function jsonS3W4QuePrioMod()
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', 3);
        $this->db->where('category', 'PRIORITY');
        $this->db->order_by('queue_num', 'ASC');
        $query = $this->db->get('tbl_transactions');
        $result = $query->result();
        foreach ($result as $row) {
            $row->queue_num = str_pad($row->queue_num, 3, '0', STR_PAD_LEFT);
        }
        return $result;
    }


    public function jsonS3getPend()
    {
        $this->db->where('status', 2);
        $this->db->where('step_id', 3);
        $this->db->order_by('category', 'ASC');
        $query = $this->db->get('tbl_transactions');
        $result = $query->result();
        foreach ($result as $row) {
            $row->queue_num = str_pad($row->queue_num, 3, '0', STR_PAD_LEFT);
        }
        return $result;
    }
    public function jsonS3W1PendMod()
    {
        $this->db->where('status', 2);
        $this->db->where('step_id', 3);
        $this->db->order_by('category', 'ASC');
        $query = $this->db->get('tbl_transactions');
        $result = $query->result();
        foreach ($result as $row) {
            $row->queue_num = str_pad($row->queue_num, 3, '0', STR_PAD_LEFT);
        }
        return $result;
    }

    public function jsonS3W2PendMod()
    {
        $this->db->where('status', 2);
        $this->db->where('step_id', 3);
        $this->db->order_by('category', 'ASC');
        $query = $this->db->get('tbl_transactions');
        $result = $query->result();
        foreach ($result as $row) {
            $row->queue_num = str_pad($row->queue_num, 3, '0', STR_PAD_LEFT);
        }
        return $result;
    }
    public function jsonS3W3PendMod()
    {
        $this->db->where('status', 2);
        $this->db->where('step_id', 3);
        $this->db->order_by('category', 'ASC');
        $query = $this->db->get('tbl_transactions');
        $result = $query->result();
        foreach ($result as $row) {
            $row->queue_num = str_pad($row->queue_num, 3, '0', STR_PAD_LEFT);
        }
        return $result;
    }
    public function jsonS3W4PendMod()
    {
        $this->db->where('status', 2);
        $this->db->where('step_id', 3);
        $this->db->order_by('category', 'ASC');
        $query = $this->db->get('tbl_transactions');
        $result = $query->result();
        foreach ($result as $row) {
            $row->queue_num = str_pad($row->queue_num, 3, '0', STR_PAD_LEFT);
        }
        return $result;
    }

    public function qsfS3W1UpdPendMod($id)
    {
        $this->db->where('id', $id);
        $this->db->where('status', 2);
        $this->db->where('step_id', 3);
        $this->db->update('tbl_transactions', array('step_id' => 4, 'window_id' => null, 'status' => 0));
    }
    public function qsfS3W2UpdPendMod($id)
    {
        $this->db->where('id', $id);
        $this->db->where('status', 2);
        $this->db->where('step_id', 3);
        $this->db->update('tbl_transactions', array('step_id' => 4, 'window_id' => null, 'status' => 0));
    }
    public function qsfS3W3UpdPendMod($id)
    {
        $this->db->where('id', $id);
        $this->db->where('status', 2);
        $this->db->where('step_id', 3);
        $this->db->update('tbl_transactions', array('step_id' => 4, 'window_id' => null, 'status' => 0));
    }
    public function qsfS3W4UpdPendMod($id)
    {
        $this->db->where('id', $id);
        $this->db->where('status', 2);
        $this->db->where('step_id', 3);
        $this->db->update('tbl_transactions', array('step_id' => 4, 'window_id' => null, 'status' => 0));
    }

    public function s3getServing()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 3);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }
    public function s3w1autoDSMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 3);
        $this->db->where('window_id', 1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }

    public function s3w2autoDSMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 3);
        $this->db->where('window_id', 2);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }
    public function s3w3autoDSMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 3);
        $this->db->where('window_id', 3);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }
    public function s3w4autoDSMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 3);
        $this->db->where('window_id', 4);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }



    // REGULAR BUTTON STATUS = 1
    public function s3w1RegBtnMod()
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', 3);
        $this->db->where('category', 'REGULAR');
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('status' => 1, 'window_id' => 1));
        }
    }
    public function s3w2RegBtnMod()
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', 3);
        $this->db->where('category', 'REGULAR');
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('status' => 1, 'window_id' => 2));
        }
    }
    public function s3w3RegBtnMod()
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', 3);
        $this->db->where('category', 'REGULAR');
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('status' => 1, 'window_id' => 3));
        }
    }
    public function s3w4RegBtnMod()
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', 3);
        $this->db->where('category', 'REGULAR');
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('status' => 1, 'window_id' => 4));
        }
    }













    // PRIORITY BUTTON STATUS = 1
    public function s3w1PrioBtnMod()
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', 3);
        $this->db->where('category', 'PRIORITY');
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('status' => 1, 'window_id' => 1));
        }
    }
    public function s3w2PrioBtnMod()
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', 3);
        $this->db->where('category', 'PRIORITY');
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('status' => 1, 'window_id' => 2));
        }
    }
    public function s3w3PrioBtnMod()
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', 3);
        $this->db->where('category', 'PRIORITY');
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('status' => 1, 'window_id' => 3));
        }
    }
    public function s3w4PrioBtnMod()
    {
        $this->db->where('status', 0);
        $this->db->where('step_id', 3);
        $this->db->where('category', 'PRIORITY');
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('status' => 1, 'window_id' => 4));
        }
    }

    public function s3w1SkipMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 3);
        $this->db->where('window_id', 1);
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');

        if ($query->num_rows() > 0) {
            $row = $query->row();
            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('status' => 2, 'window_id' => null));
        }
    }
    public function s3w2SkipMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 3);
        $this->db->where('window_id', 2);
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');

        if ($query->num_rows() > 0) {
            $row = $query->row();
            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('status' => 2, 'window_id' => null));
        }
    }
    public function s3w3SkipMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 3);
        $this->db->where('window_id', 3);
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');

        if ($query->num_rows() > 0) {
            $row = $query->row();
            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('status' => 2, 'window_id' => null));
        }
    }
    public function s3w4SkipMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 3);
        $this->db->where('window_id', 4);
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');

        if ($query->num_rows() > 0) {
            $row = $query->row();
            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('status' => 2, 'window_id' => null));
        }
    }

    public function s3w1ProceedMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 3);
        $this->db->where('window_id', 1);
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');

        if ($query->num_rows() > 0) {
            $row = $query->row();

            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('step_id' => 4, 'window_id' => null,  'status' => 0));
        }
    }
    public function s3w2ProceedMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 3);
        $this->db->where('window_id', 2);
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');

        if ($query->num_rows() > 0) {
            $row = $query->row();

            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('step_id' => 4, 'window_id' => null,  'status' => 0));
        }
    }
    public function s3w3ProceedMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 3);
        $this->db->where('window_id', 3);
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');

        if ($query->num_rows() > 0) {
            $row = $query->row();

            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('step_id' => 4, 'window_id' => null,  'status' => 0));
        }
    }
    public function s3w4ProceedMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 3);
        $this->db->where('window_id', 4);
        $this->db->limit(1);
        $query = $this->db->get('tbl_transactions');

        if ($query->num_rows() > 0) {
            $row = $query->row();

            $this->db->where('id', $row->id);
            $this->db->update('tbl_transactions', array('step_id' => 4, 'window_id' => null,  'status' => 0));
        }
    }










    public function s3w1CallBtnMod()
    {
        $this->db->where('step_id', 3);
        $this->db->where('window_id', 1);
        $this->db->where('category', 'BOTH');
        $this->db->limit(1);

        $query = $this->db->get('recall');

        if ($query->num_rows() > 0) {
            $row = $query->row();

            $this->db->where('id', $row->id);
            $this->db->set('call_num', 'call_num + 1', false); // `false` disables escaping
            $this->db->update('recall');
        }
    }
    public function s3w2CallBtnMod()
    {
        $this->db->where('step_id', 3);
        $this->db->where('window_id', 2);
        $this->db->where('category', 'BOTH');
        $this->db->limit(1);

        $query = $this->db->get('recall');

        if ($query->num_rows() > 0) {
            $row = $query->row();

            $this->db->where('id', $row->id);
            $this->db->set('call_num', 'call_num + 1', false); // `false` disables escaping
            $this->db->update('recall');
        }
    }
    public function s3w3CallBtnMod()
    {
        $this->db->where('step_id', 3);
        $this->db->where('window_id', 3);
        $this->db->where('category', 'BOTH');
        $this->db->limit(1);

        $query = $this->db->get('recall');

        if ($query->num_rows() > 0) {
            $row = $query->row();

            $this->db->where('id', $row->id);
            $this->db->set('call_num', 'call_num + 1', false); // `false` disables escaping
            $this->db->update('recall');
        }
    }
    public function s3w4CallBtnMod()
    {
        $this->db->where('step_id', 3);
        $this->db->where('window_id', 4);
        $this->db->where('category', 'BOTH');
        $this->db->limit(1);

        $query = $this->db->get('recall');

        if ($query->num_rows() > 0) {
            $row = $query->row();

            $this->db->where('id', $row->id);
            $this->db->set('call_num', 'call_num + 1', false); // `false` disables escaping
            $this->db->update('recall');
        }
    }
}
