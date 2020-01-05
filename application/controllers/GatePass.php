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
		$this->load->model('GatePassModel', 'gatepass');
	}

	public function gatePass()
	{
		$this->load->view('forms-gate-pass');
	}

	public function gatePassList()
	{
		$this->load->view('gate-pass-list');
	}

	public function addGatePassRecord()
	{
		$data = array(
			'sid' => $this->input->post("sid"),
			'vid' => $this->input->post("vid"),
			'out_time' => $this->input->post("outtime"),
			'in_time' => $this->input->post("intime"),
			'reason' => $this->input->post("reason")
		);

		$result = $this->gatepass->addGatePass($data);
		echo $result;
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



