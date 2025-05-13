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


    public function getLastPrio() // Defines a function called 'getLastRegu' to retrieve the last queue number.
    {
        $this->db->select('queue_num'); // Selects the 'queue_num' column from the database.
        $this->db->where('category', 'PRIORITY');
        $this->db->from('tbl_transactions'); // Specifies the table 'tbl_transactions' from which to retrieve data.
        $this->db->order_by('queue_num', 'DESC'); // Orders the results by 'queue_num' in descending order, so the highest number is first.
        $this->db->limit(1); // Limits the query to only one result, i.e., the highest 'queue_num'.
        $query = $this->db->get(); // Executes the query and stores the result in the variable '$query'.
        return ($query->num_rows() > 0) ? $query->row()->queue_num : 0; // Returns the 'queue_num' if a result is found; otherwise, returns 0.
    }



    public function insertNewQueuePrio()
    {
        $lastQueueNum = $this->getLastPrio();
        $newQueueNum = $lastQueueNum + 1;
        $currentDateTime = date('Y-m-d H:i:s');
        $data = [
            'queue_num' => $newQueueNum,
            'division_id' => 9,
            'section_id' => 15,
            'category' => 'PRIORITY',
            'service_id' => 15,
            'status' => 0,
            'step_id' => 2,
            'datetoday' => $currentDateTime
        ];
        $this->db->insert('tbl_transactions', $data);
        $formattedDateTime = date('F, d, Y g:i A', strtotime($currentDateTime));
        return ($this->db->affected_rows() > 0) ? ['queue_num' => $newQueueNum, 'datetoday' => $formattedDateTime] : false;
    }

    public function getLastRegu() // Defines a function called 'getLastRegu' to retrieve the last queue number.
    {
        $this->db->select('queue_num'); // Selects the 'queue_num' column from the database.
        $this->db->where('category', 'REGULAR');
        $this->db->from('tbl_transactions'); // Specifies the table 'tbl_transactions' from which to retrieve data.
        $this->db->order_by('queue_num', 'DESC'); // Orders the results by 'queue_num' in descending order, so the highest number is first.
        $this->db->limit(1); // Limits the query to only one result, i.e., the highest 'queue_num'.
        $query = $this->db->get(); // Executes the query and stores the result in the variable '$query'.
        return ($query->num_rows() > 0) ? $query->row()->queue_num : 0; // Returns the 'queue_num' if a result is found; otherwise, returns 0.
    }

    public function insertNewQueueRegu()
    {
        $lastQueueNum = $this->getLastRegu();
        $newQueueNum = $lastQueueNum + 1;
        $currentDateTime = date('Y-m-d H:i:s');
        $data = [
            'queue_num' => $newQueueNum,
            'division_id' => 9,
            'section_id' => 15,
            'category' => 'REGULAR',
            'service_id' => 15,
            'status' => 0,
            'step_id' => 2,
            'datetoday' => $currentDateTime // Store date in database
        ];

        $this->db->insert('tbl_transactions', $data);
        $formattedDateTime = date('F, d, Y g:i A', strtotime($currentDateTime));
        return ($this->db->affected_rows() > 0) ? ['queue_num' => $newQueueNum, 'datetoday' => $formattedDateTime] : false;
    }

    public function fetchJsonRegu()
    {
        $this->db->where('category', 'REGULAR');
        $query = $this->db->get('tbl_transactions');
        $result = $query->result();
        foreach ($result as $row) {
            $row->queue_num = str_pad($row->queue_num, 3, '0', STR_PAD_LEFT); // Pads 'queue_num' to 3 digits with leading zeroes
        }
        return $result;
    }
    public function fetchJsonPrio()
    {
        $this->db->where('category', 'PRIORITY');
        $query = $this->db->get('tbl_transactions');
        $result = $query->result();
        foreach ($result as $row) {
            $row->queue_num = str_pad($row->queue_num, 3, '0', STR_PAD_LEFT);
        }
        return $result;
    }
}
