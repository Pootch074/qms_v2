<?php
defined('BASEPATH') or exit('No direct script access allowed');
class QsdModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getQsdStepPrio()
    {
        $this->db->where('status', 1);
        $this->db->where('category', 'PRIORITY');
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }

    public function getQsdQueuePrio()
    {
        $this->db->where('status', 1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }

    public function getQsdStepRegu()
    {
        $this->db->where('status', 1);
        $this->db->where('category', 'REGULAR');
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }

    public function getQsdQueueRegu()
    {
        $this->db->where('status', 1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }

    public function s2Mod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 2);
        $this->db->where('window_id', 1);
        $this->db->where('category', 'PRIORITY');
        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }
    public function s2w2Mod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 2);
        $this->db->where('window_id', 2);
        $this->db->where('category', 'PRIORITY');
        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }




    /*-------------------- REGULAR MODELS --------------------*/

    public function s2w1RegMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 2);
        $this->db->where('window_id', 1);
        $this->db->where('category', 'REGULAR');
        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }
    public function s2w2RegMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 2);
        $this->db->where('window_id', 2);
        $this->db->where('category', 'REGULAR');
        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }
    public function s3w1RegMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 3);
        $this->db->where('window_id', 1);
        $this->db->where('category', 'REGULAR');
        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }
    public function s3w2RegMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 3);
        $this->db->where('window_id', 2);
        $this->db->where('category', 'REGULAR');
        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }
    public function s3w3RegMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 3);
        $this->db->where('window_id', 3);
        $this->db->where('category', 'REGULAR');
        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }
    public function s3w4RegMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 3);
        $this->db->where('window_id', 4);
        $this->db->where('category', 'REGULAR');
        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }
    public function s4w1RegMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 4);
        $this->db->where('window_id', 1);
        $this->db->where('category', 'REGULAR');
        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }
    public function s4w2RegMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 4);
        $this->db->where('window_id', 2);
        $this->db->where('category', 'REGULAR');
        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }
    public function s4w3RegMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 4);
        $this->db->where('window_id', 3);
        $this->db->where('category', 'REGULAR');
        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }
























    public function s2w3RegMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 2);
        $this->db->where('window_id', 3);
        $this->db->where('category', 'REGULAR');
        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }
    public function s3w1PrioMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 3);
        $this->db->where('window_id', 1);
        $this->db->where('category', 'PRIORITY');
        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }


    public function s3w2PrioMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 3);
        $this->db->where('window_id', 2);
        $this->db->where('category', 'PRIORITY');
        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }


    public function s3w3PrioMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 3);
        $this->db->where('window_id', 3);
        $this->db->where('category', 'PRIORITY');
        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }
    public function s3w4PrioMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 3);
        $this->db->where('window_id', 4);
        $this->db->where('category', 'PRIORITY');
        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }

    public function s4w1PrioMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 4);
        $this->db->where('window_id', 1);
        $this->db->where('category', 'PRIORITY');
        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }

    public function s4w2PrioMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 4);
        $this->db->where('window_id', 2);
        $this->db->where('category', 'PRIORITY');
        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }
    public function s4w3PrioMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 4);
        $this->db->where('window_id', 3);
        $this->db->where('category', 'PRIORITY');
        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }


    public function qsdS3PrioModel()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 3);
        $this->db->where('category', 'PRIORITY');
        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }

    public function qsdS2ReguModel()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 2);
        $this->db->where('category', 'REGULAR');
        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }

    public function qsdS3Model()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 3);
        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }

    public function qsdS4Model()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 4);
        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }

    public function qsdFMmodel()
    {
        $query = $this->db->get('qsd_marquee');
        return $query->result();
    }













    public function abcdMod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 2);
        $this->db->where('window_id', 1);
        $this->db->where('category', 'PRIORITY');
        $this->db->where('call_stat', NULL);

        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }











    public function hiddenS2Mod()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 2);
        $this->db->where('window_id', 1);
        $this->db->where('category', 'PRIORITY');
        $this->db->where('call_stat', 1);

        $this->db->Limit(1);
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }


    public function resetCallStatForPriority()
    {
        $this->db->where('status', 1);
        $this->db->where('step_id', 2);
        $this->db->where('window_id', 1);
        $this->db->where('call_stat', 1);

        $this->db->set('call_stat', 0);
        $this->db->update('tbl_transactions');
    }












    public function abcdcallCountMod()
    {
        $this->db->where('step_id', 2);
        $this->db->where('window_id', 1);
        $this->db->where('category', 'PRIORITY');
        $query = $this->db->get('recall');
        return $query->result();
    }
}
