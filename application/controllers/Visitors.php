<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

if($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
	header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
	header('Access-Control-Allow-Headers: Content-Type');
	exit;
}

class Visitors extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('VisitorsModel', 'visitor');
		$this->load->model('StudentsModel', 'student');
	}

	public function visitorsRequest()
	{
		$data['students'] = $this->student->getStudentsIdAndName();
		$this->load->view('forms-visitors-request', $data);
	}

	public function visitorsList()
	{
		$data['list'] = $this->visitor->getVisitorsList();
		$this->load->view('visitors-list', $data);
	}

	public function addVisitor()
	{
		$data = array(
			'full_name' => $this->input->post("fullname"),
			'address' => $this->input->post("address"),
			'student_id' => $this->input->post("sid"),
			'relationship' => $this->input->post("relationship"),
			'status' => 0,
			'mobile' => $this->input->post("mobile"),
			'created_at' => date("D M d, Y G:i")

		);

		$result = $this->visitor->addVisitor($data);
		echo "Success";
	}

	public function VisitorStatusChange()
	{
		$status = 2;
		return  $this->visitors->statusChange(2, $status);
	}

	public function GetVisitorsList()
	{
		return $this->visitors->getVisitorsList();
	}

	public function GetVisitorsNameAndId()
	{
		return $this->visitors->getVisitorsNameAndId();
	}
	
	public function getVisitorsCount()
	{
		return $this->visitors->getVisitorsCount();
	}

    function pdf_gen(){
        $this->load->library('pdfgenerator');

        $data['list'] = $this->visitor->getVisitorsList();
        $html = $this->load->view('visitors-pdf', $data, true);

        $this->pdfgenerator->generate($html);
    }
}
