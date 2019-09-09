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
		$this->load->model('VisitorsModel', 'visitors');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function addVisitor()
	{
		$student_id = 1;
		$description = 'Going Home';
		$status = '0';

		$data = array(
			'student_id' => $student_id,
			'relationship' => $description,
			'status' => $status,
			'created_at' => ''

		);

		$result = $this->visitors->addVisitor($data);

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

}
