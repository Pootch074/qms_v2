<?php

class UserModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // Load the database library
        $this->load->database();
    }

    // Method to retrieve user by email for login
    public function loginUser($employeeID) //$email is a variable storage for email_id input name
    {
        $this->db->where('user_id', $employeeID); //$email is a variable storage for email_id input name
        $query = $this->db->get('tbl_users');

        if ($query->num_rows() === 1) {
            return $query->row(); // Return user object
        } else {
            return FALSE; // User not found
        }
    }

    public function registerUser($data)
    {
        return $this->db->insert('tbl_users', $data);
    }
}
