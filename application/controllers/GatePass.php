<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

if($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
	header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
	header('Access-Control-Allow-Headers: Content-Type');
	exit;
}

class GatePass extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('logmodel', 'leave');
	}



	public function gatePass()
	{
		$this->load->view('forms-gate-pass');
	}

	public function gatePassList()
	{
		$this->load->view('gate-pass-list');
	}

	public function addLogRecord()
	{
		$student_id = 1;
		$description = 'Going Home';
		$check_out_time = '2019-04-30';
		$check_in_time = '2019-04-30';
		$approval_status = '0';

		$data = array(
			'student_id' => $student_id,
			'description' => $description,
			'check_out_time' => $check_out_time,
			'check_in_time' => $check_in_time,
			'created_at' => '',
			'approval_status' => $approval_status,
		);

		$result = $this->leave->addLog($data);

		/*if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}*/
	}

	public function LeaveStatusChange()
	{
		$status = 2;
		$result = $this->leave->statusChange(2, $status);

		/*if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}*/
	}

	public function GetLogList()
	{
		$result = $this->leave->getLogList();
		print_r($result);

		/*if ($result) {
			$this->response($result, 200);
		} else {
			$this->response(array(), 200);
		}*/
	}

}




