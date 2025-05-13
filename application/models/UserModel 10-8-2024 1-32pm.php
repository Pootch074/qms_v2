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
    public function loginUser($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('tbl_users'); // Ensure 'users' is your table name

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
