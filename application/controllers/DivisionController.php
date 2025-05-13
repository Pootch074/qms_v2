<?php
// application/controllers/DivisionController.php
defined('BASEPATH') OR exit('No direct script access allowed');
class DivisionController extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('PacdModel');
        // Load other necessary libraries, helpers, etc.
    }


    public function fetch_sections() {
        $division_id = $this->input->post('mnjk');
        $sections = $this->PacdModel->get_sections_by_division($division_id);
        
        if (!empty($sections)) {
            foreach ($sections as $section) {
                // ANG VALUE SA division_id NGA SULOD SA ONCLICK MAO ANG BASEHAN NA VALUE
                echo '<button class="py-2 btn btn-primary" onclick="ticket(' . $section->id . ' )"> 
                ' . $section->section_name . '
                </button>';
            }
        } else {
            echo '<p>No sections available for this division.</p>';
        }
    }
    
    public function displayTicket(){ // MAO NI ANG CONTROLLER METHOD NA MUDAWAT SA efg PARAMETER GIKAN SA AJAX REQUEST
        $abc = $this->input->post('efg'); // I RETRIEVE NIYA ANG VALUE SA efg THEN IBUTANG SA abc
        $tickets = $this->PacdModel->ticketModel($abc); // IPASA NIYA SA MODEL NA ticketModel TAS I STORE SA $tickets

        if (!empty($tickets)){ // AFTERS SA MODEL, IF ANG result SA MODEL KAY DILI EMPTY 
            foreach ($tickets as $ticket){ // I ITERATE NIYA THROUGH $tickets ARRAY as  $ticket OBJECT
                // MAG CREATE SYAG div ELEMENT EACH $ticket WITH ITS id AND section_name
                // TAPOS I echo NIYA BALIK SA ajax REQUEST
                echo '<div class="' . $ticket->id. '">
                ' . $ticket->division_name . '
                ' . $ticket->section_name . '
                </div>';
            }
            
        } else {
            echo 'error';
        }
    }

    public function chooseCateg(){
        $catVar = $this->input->post('catName');  // Get the selected category name from the AJAX request

        // Store the category name in the session so we can use it later
        $this->session->set_userdata('selected_category', $catVar);

        echo "Category selected";  // Respond to the AJAX call (response isn't used in this case)
    }

}
