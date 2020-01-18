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

	public function pendingStudentList()
	{
		$this->load->view('pending-student-list');
	}

	public function allStudentList()
	{
		$data['list'] = $this->student->getStudentList();
		$this->load->view('all-student-list', $data);
	}

	public function requestForm()
	{
		$this->load->view('forms-request-form');
	}

	public function goingHome()
	{
		$this->load->view('forms-going-home');
	}

	public function registerStudent()
	{
		// $this->load->helper(array('form', 'url'));
		// $this->load->library('form_validation');

		// $this->form_validation->set_rules('fullName', "Full Name", 'required');
		// $this->form_validation->set_rules('namewithitials', "Name with Initials", 'required');
		// $this->form_validation->set_rules('dateofbirth', "Date of Birth", 'required');

		// if ($this->form_validation->run() == FALSE) {
		// 	$this->load->view('forms-admission');
		// } else {
			$fullName = $this->input->post("fullName");
			$nameInitials = $this->input->post("nameInitials");
			$dob = $this->input->post("birthDate");
			$address = $this->input->post("address");
			$contactNumber = $this->input->post("contact");
			$grade = $this->input->post("grade");
			$admissonNumber = $this->input->post('admissonNumber');
			$house = $this->input->post('house');
			$status = '0';

			$data = array(
				'full_name' => $fullName,
				'name_with_initials' => $nameInitials,
				'dob' => $dob,
				'address' => $address,
				'contact_number' => $contactNumber,
				'grade' => $grade,
				'sch_admission_number' => $admissonNumber,
				'house' => $house,
				'status' => $status,
			);
			
			$result = $this->student->addStudent($data);
			echo "Success";
		//}
	}

	public function studentStatusChange()
	{
		$sid = $this->input->post("sid");
		$status = $this->input->post("status");
		$result = $this->student->statusChange($sid, $status);
	}

	public function getStudentList()
	{
		$this->load->view('pending-student-list');
	}
	
	public function getStudentsNameAndId()
	{
		return $this->student->getStudentsNameAndId();

	}

	public function GetStudentsCount()
	{
		return $this->student->getStudentsCount();
		
	}
}
