<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PacdController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Load the model in the constructor
		$this->load->model('PacdModel');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->model("PacdModel");
		$fname = $this->session->userdata('fname');
		$lname = $this->session->userdata('lname');
		$ass_step = $this->session->userdata('ass_step');
		$section = $this->session->userdata('section');
		$prioCat = $this->PacdModel->getPrioCategory();
		$reguCat = $this->PacdModel->getReguCategory();

		$data = [
			'gpc' => $prioCat,
			'grc' => $reguCat,
			'fname' => $fname,
			'lname' => $lname,
			'ass_step' => $ass_step,
			'section' => $section
		];
		$this->load->view('template/header', $data);
		$this->load->view('qnd', $data);
		$this->load->view('template/footer');
	}


	// FETCHING VALUES FROM DATABASE
	public function admin()
	{
		$this->load->view('template/header');
		//$this->load->view('template/sidebar');
		$this->load->model("PacdModel");
		$categories = $this->PacdModel->getCategory();
		$divisions = $this->PacdModel->getDivision();
		$sections = $this->PacdModel->getSection();
		$services = $this->PacdModel->getService();
		$data = [
			'tbl_categories' => $categories,
			'tbl_divisions' => $divisions,
			'tbl_sections' => $sections,
			'tbl_services' => $services

		];
		$this->load->view('pacd_admin', $data);
		$this->load->view('template/footer');
	}
	// 
	public function pacdDivisions()
	{
		$this->load->view('template/header');
		$this->load->model("PacdModel"); // I LOAD NIYA ANG MODEL PacdModel
		$divisions = $this->PacdModel->getDivision(); // GI RETRIEVE SA getDivision METHOD ANG DATA GIKAN SA PacdModel WHICH IS ANG DATA SA tbl_divisions TAS GISULOD SA $divisions NA VARIABLE
		// ANG MGA NAKUHA NA DATA NGA NAA NA SA $divisions VARIABLE KAY GI STORE SA $data ARRAY NGA ANG KEY IS xyz
		$data = [ // PWEDE BISAG UNSA NAME SA ARRAY $data
			'xyz' => $divisions, // ANG NAME SA ARRAY KEY WHICH IS xyz IS SAME DAPAT SA NAME SA VARIABLE SA CONTROLLER LIKE $xyz
		];
		// AFTER ANA, KAY IPASA NIYA ANG $data SA pacd_divisions NA VIEW
		$this->load->view('pacd_divisions', $data);
		$this->load->view('template/footer');
	}












	public function pacdSections()
	{
		$this->load->view('template/header');
		$this->load->model("PacdModel");
		$sections = $this->PacdModel->getSection();
		$data = [
			'tbl_sections' => $sections,
		];

		$this->load->view('pacd_sections', $data);
		$this->load->view('template/footer');
	}




























	public function createCat()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('createCat');
		$this->load->view('template/footer');
	}
	public function createDiv()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('createDiv');
		$this->load->view('template/footer');
	}
	public function createSec()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('createSec');
		$this->load->view('template/footer');
	}
	public function createServe()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('createServe');
		$this->load->view('template/footer');
	}























	// INSERT VALUES IN DATABASE FUNCTION
	public function createCatFunc()
	{
		$this->form_validation->set_rules('catName', 'Category Name', 'required'); // Set validation rules for the form input named 'catName'. // 'Category Name' is used as a human-readable field name in case of an error message. // The 'required' rule means that this field cannot be left empty.

		if ($this->form_validation->run()) { // Run the form validation. // If it passes (i.e., the input satisfies the validation rules), continue inside the block.
			$category_name = strtoupper($this->input->post('catName')); // Retrieve the input and convert it to uppercase using strtoupper().
			// Create an associative array with the uppercase category name.
			$data = [
				'category_name' => $category_name,
			];

			log_message('debug', 'Data to insert: ' . print_r($data, true)); // Log the data to be inserted for debugging purposes. // It logs a debug message showing the contents of the $data array.
			$this->load->model('PacdModel', 'emp'); // Load the model 'PacdModel' and assign it an alias 'emp' for easy reference. // The model contains the database logic.
			$this->emp->createCatFunc($data); // Call the 'createCatFunc' method from the 'PacdModel' model. // Pass the $data array (containing 'category_name') to this method for insertion into the database.
			redirect(base_url('pacdAdmin')); // Redirect the user to the 'pacdAdmin' page after successfully creating the category. // base_url('pacdAdmin') generates the full URL to the 'pacdAdmin' route.
		} else {

			$this->create(); // If the form validation fails, call the 'create()' method (presumably to reload the form). // This allows the user to see validation errors and re-enter the form data.
		}
	}

	public function createDivFunc()
	{
		$this->form_validation->set_rules('divName', 'Division Name', 'required');
		if ($this->form_validation->run()) {
			$division_name = strtoupper($this->input->post('divName'));

			$data = [
				'division_name' => $division_name,
			];

			log_message('debug', 'Data to insert: ' . print_r($data, true));
			$this->load->model('PacdModel', 'emp');
			$this->emp->createDivFunc($data);
			redirect(base_url('pacdAdmin'));
		} else {

			$this->create();
		}
	}
	public function createSecFunc()
	{
		$this->form_validation->set_rules('secName', 'Section Name', 'required');
		if ($this->form_validation->run()) {
			$section_name = strtoupper($this->input->post('secName'));

			$data = [
				'section_name' => $section_name,
			];

			log_message('debug', 'Data to insert: ' . print_r($data, true));
			$this->load->model('PacdModel', 'emp');
			$this->emp->createSecFunc($data);
			redirect(base_url('pacdAdmin'));
		} else {

			$this->create();
		}
	}
	public function createServFunc()
	{
		$this->form_validation->set_rules('servName', 'Service Name', 'required');
		if ($this->form_validation->run()) {
			$service_name = strtoupper($this->input->post('servName'));

			$data = [
				'service_name' => $service_name,
			];

			log_message('debug', 'Data to insert: ' . print_r($data, true));
			$this->load->model('PacdModel', 'emp');
			$this->emp->createServFunc($data);
			redirect(base_url('pacdAdmin'));
		} else {

			$this->create();
		}
	}




	// DELETE VALUES IN DATABASE FUNCTION
	public function deleteCatFunc($id)
	{
		$this->load->model('PacdModel');
		$delete = $this->PacdModel->deleteCatFunc($id);

		if ($delete) {
			$this->session->set_flashdata('success', 'Category deleted successfully.');
		} else {
			$this->session->set_flashdata('error', 'Failed to delete category.');
		}
		redirect(base_url('pacdAdmin'));
	}

	public function deleteDivFunc($id)
	{
		$this->load->model('PacdModel');
		$delete = $this->PacdModel->deleteDivFunc($id);

		if ($delete) {
			$this->session->set_flashdata('success', 'Division deleted successfully.');
		} else {
			$this->session->set_flashdata('error', 'Failed to delete division.');
		}
		redirect(base_url('pacdAdmin'));
	}
	public function deleteSecFunc($id)
	{
		$this->load->model('PacdModel');
		$delete = $this->PacdModel->deleteSecFunc($id);

		if ($delete) {
			$this->session->set_flashdata('success', 'Section deleted successfully.');
		} else {
			$this->session->set_flashdata('error', 'Failed to delete section.');
		}
		redirect(base_url('pacdAdmin'));
	}
	public function deleteServFunc($id)
	{
		$this->load->model('PacdModel');
		$delete = $this->PacdModel->deleteServFunc($id);

		if ($delete) {
			$this->session->set_flashdata('success', 'Service deleted successfully.');
		} else {
			$this->session->set_flashdata('error', 'Failed to delete Service.');
		}
		redirect(base_url('pacdAdmin'));
	}
}
