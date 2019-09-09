<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

if($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
	header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
	header('Access-Control-Allow-Headers: Content-Type');
	exit;
}

class Student extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('StudentsModel', 'student');
	}

	public function index()
	{
		$this->load->view('forms-admission');
	}

	public function tablesData()
	{
		$studentList = $this->GetStudentList();
		echo $studentList;
		$this->load->view('tables-data-admission');
	}

	public function goingHome()
	{
		$this->load->view('forms-going-home');
	}

	public function RegisterStudent()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('fullName', "Full Name", 'required');
		$this->form_validation->set_rules('nameInitials', "Name Initials", 'required');
		$this->form_validation->set_rules('birthDate', "Birth Day", 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('forms-admission');
		} else {
			$full_name = $this->input->post("fullName");
			$dob = $this->input->post("birthDate");
			$address = $this->input->post("address");
			$contact_number = $this->input->post("contact");
			$grade = $this->input->post("grade");
			$status = '0';

			$data = array(
				'full_name' => $full_name,
				'dob' => $dob,
				'address' => $address,
				'contact_number' => $contact_number,
				'grade' => $grade,
				'status' => $status,
			);

			$result = $this->student->addStudent($data);

			echo "Success";
		}
	}

	public function StudentStatusChange()
	{
		$status = 2;
		$result = $this->student->statusChange(4, $status);

		/*if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}*/
	}

	public function GetStudentList()
	{
		$result = $this->student->getStudentList();
		print_r($result);

		/*if ($result) {
			$this->response($result, 200);
		} else {
			$this->response(array(), 200);
		}*/
	}

}
