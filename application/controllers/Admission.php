<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

if($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
	header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
	header('Access-Control-Allow-Headers: Content-Type');
	exit;
}

class Admission extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('StudentsModel', 'student');
	}

	public function admissionform()
	{
		$this->load->view('forms-admission');
	}

	public function pendingStudentList()
	{
        $data = array();
		$data['list'] = $this->student->getStudentList();

		$this->load->view('pending-student-list', $data);
	}
    public function pendingStudentListSelected()
    {
        $data = array();
        if($this->input->post("status") != null){ $status = $this->input->post("status");} else { $status = 'All'; }
        $data['list'] = $this->student->getStudentListSelected($status);
    }

    function pdf_gen(){
        $this->load->library('pdfgenerator');

        $data['list'] = $this->student->getStudentList();
        $html = $this->load->view('pending-student-pdf', $data, true);

        $this->pdfgenerator->generate($html);
    }
}
