<?php
defined('BASEPATH') or exit('No direct script access allowed');
class QndModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getCategory()
    {
        $query = $this->db->get('tbl_categories');
        return $query->result();
    }

    public function getPrioCategory()
    {
        $this->db->where('category_name', 'PRIORITY');
        $query = $this->db->get('tbl_categories');
        return $query->result();
    }

    public function getReguCategory()
    {
        $this->db->where('category_name', 'REGULAR');
        $query = $this->db->get('tbl_categories');
        return $query->result();
    }

    public function getTran()
    {
        $this->db->order_by('queue_num', 'DESC');
        $query = $this->db->get('tbl_transactions');
        return $query->result();
    }
}
