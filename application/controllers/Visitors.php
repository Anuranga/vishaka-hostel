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
	}

	public function visitorsRequest()
	{
		$this->load->view('forms-visitors-request');
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
			'status' => $this->input->post("status"),
			'mobile' => $this->input->post("mobile"),
			'created_at' => date("D M d, Y G:i")

		);

		$result = $this->visitor->addVisitor($data);
		echo "Success";
		/*if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}*/
	}

	public function VisitorStatusChange()
	{
		$status = 2;
		$result = $this->visitors->statusChange(2, $status);

		/*if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}*/
	}

	public function GetVisitorsList()
	{
		$result = $this->visitors->getVisitorsList();
		print_r($result);

		/*if ($result) {
			$this->response($result, 200);
		} else {
			$this->response(array(), 200);
		}*/
	}

	public function GetVisitorsNameAndId()
	{
		$result = $this->visitors->getVisitorsNameAndId();
		print_r($result);

		/*if ($result) {
			$this->response($result, 200);
		} else {
			$this->response(array(), 200);
		}*/
	}
	
	public function getVisitorsCount()
	{
		$result = $this->visitors->getVisitorsCount();
		print_r($result);

		/*if ($result) {
			$this->response($result, 200);
		} else {
			$this->response(array(), 200);
		}*/
	}
}
