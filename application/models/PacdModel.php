<?php
defined('BASEPATH') or exit('No direct script access allowed');
class PacdModel extends CI_Model
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

    // I FETCH ANG TABLE NA tbl_divisions SA qms DATABASE
    public function getDivision()
    {
        $query = $this->db->get('tbl_divisions'); // GI FETCH NIYA ANG DATA SA tbl_divisions TAS GISULOD SA $query
        return $query->result(); // TAS GI RETURN AS RESULT
    }

    // CAN I FETCH TABLES? I AM FETCHING THE tbl_sections AND I WANT TO FETCH THE tbl_divisions. HOw to do that?
    public function getSection()
    {
        $query = $this->db->get('tbl_sections');
        return $query->result();
    }
    public function getService()
    {
        $query = $this->db->get('tbl_services');
        return $query->result();
    }

    public function createCatFunc($data)
    {
        return $this->db->insert('tbl_categories', $data);
    }
    public function createDivFunc($data)
    {
        return $this->db->insert('tbl_divisions', $data);
    }
    public function createSecFunc($data)
    {
        return $this->db->insert('tbl_sections', $data);
    }
    public function createServFunc($data)
    {
        return $this->db->insert('tbl_services', $data);
    }

    // DELETE VALUES IN DATABASE
    public function deleteCatFunc($id)
    {
        // Delete the row from the database
        $this->db->where('id', $id);
        return $this->db->delete('tbl_categories'); // Ensure the table name is correct
    }
    public function deleteDivFunc($id)
    {
        // Delete the row from the database
        $this->db->where('id', $id);
        return $this->db->delete('tbl_divisions'); // Ensure the table name is correct
    }
    public function deleteSecFunc($id)
    {
        // Delete the row from the database
        $this->db->where('id', $id);
        return $this->db->delete('tbl_sections'); // Ensure the table name is correct
    }
    public function deleteServFunc($id)
    {
        // Delete the row from the database
        $this->db->where('id', $id);
        return $this->db->delete('tbl_services'); // Ensure the table name is correct
    }







    public function get_sections_by_division($division_id)
    {
        $this->db->where('division_id', $division_id); // I MATCH ANG VALUE SA CLICKED BUTTON TO division_id SA tbl_sections
        $query = $this->db->get('tbl_sections');
        return $query->result();  // Returns an array of section objects
    }
























    //public function ticketModel($abc) { // KANI NA MODEL MAGPERFORM UG DATABASE QUERY SA tbl_sections TABLE 
    //    $this->db->where('id', $abc); // THEN I MATCH NIYA ANG division_id SA VALUE SA $abc NGIKAN SA CONTROLLER
    //    $query = $this->db->get('tbl_sections'); // I RETRIEVE NIYA ANG NA MATCH NA RECORD SA tbl_sections TAS I ASSIGN SA VARIABLE $query
    //    return $query->result(); // IF NAA MATCH NA RECORD, KWAON ANG $query TAS I RETURN AS result // THEN PASA NAPOD SA DivisionController.php
    //}


    // WITH FOREIGN KEY METHOD
    //public function ticketModel($abc) {  // KANI NA MODEL MAGPERFORM UG DATABASE QUERY SA tbl_sections TABLE 
    // Select the required columns from both tbl_sections and tbl_divisions
    //$this->db->select('tbl_sections.id, tbl_sections.section_name, tbl_divisions.division_name');
    //$this->db->from('tbl_sections');

    // Join tbl_divisions on the foreign key (assuming division_id is the foreign key in tbl_sections)
    //$this->db->join('tbl_divisions', 'tbl_sections.division_id = tbl_divisions.id');

    // Filter based on the 'id' from tbl_sections
    //$this->db->where('tbl_sections.id', $abc);

    // Execute the query and return the result
    //$query = $this->db->get();
    //return $query->result();
    //}
    // WITHOUT FOREIGN KEY METHOD
    public function ticketModel($abc)
    {
        $this->db->select('tbl_sections.id, tbl_sections.section_name, tbl_divisions.division_name');
        $this->db->from('tbl_sections');

        $this->db->join('tbl_divisions', 'tbl_sections.division_id = tbl_divisions.id', 'left');
        $this->db->where('tbl_sections.id', $abc);
        $query = $this->db->get();
        return $query->result();
    }

    public function categModel($catVar)
    {
        $this->db->where('id', $catVar);
        $query = $this->db->get('tbl_categories');
        return $query->result();
    }
}
