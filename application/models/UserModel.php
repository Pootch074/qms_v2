<?php

class UserModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // Load the database library
        $this->load->database();
    }

    // Method to retrieve user by employee id for login
    public function loginUser($employeeID)
    {
        $this->db->where('employee_id', $employeeID);
        $query = $this->db->get('qms_users');

        if ($query->num_rows() === 1) {
            return $query->row();
        } else {
            return FALSE;
        }
    }

    public function registerUser($data)
    {
        return $this->db->insert('qms_users', $data);
    }
    public function accReqAddMod($employee_id, $data)
    {
        $this->db->where('id', $employee_id);
        return $this->db->update('qms_users', $data);
    }



    public function updateUserStatus($employeeID, $status)
    {
        $this->db->set('log_status', $status);
        $this->db->where('employee_id', $employeeID);
        $this->db->update('qms_users');
    }
    public function updateUserStatusLogout($employeeID)
    {
        $this->db->set('log_status', 'INACTIVE');
        $this->db->where('employee_id', $employeeID);
        $this->db->update('qms_users');
    }
}
