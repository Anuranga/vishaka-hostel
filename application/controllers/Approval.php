<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

if($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
	header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
	header('Access-Control-Allow-Headers: Content-Type');
	exit;
}

class Approval extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('logmodel', 'leave');
	}

	public function index()
	{
		$this->load->view('forms-principal-approval');
	}

	public function securityApproval()
	{
		$this->load->view('forms-security-approval');
	}

	public function LeaveStatusChange()
	{
		$status = 2;
		$result = $this->leave->statusChange(2, $status);
	}

}
