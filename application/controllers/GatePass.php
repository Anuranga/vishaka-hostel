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
		$this->load->model('StudentsModel', 'student');
		$this->load->model('VisitorsModel', 'visitor');
	}

	public function gatePass()
	{
		$data['students'] = $this->student->getStudentsIdAndName();
		$data['visitors'] = $this->visitor->getVisitorsIdAndName();
	
		$this->load->view('forms-gate-pass', $data);
	}

	public function gatePassList()
	{
		$data['list'] = $this->gatepass->getGatepassList();
		$this->load->view('gate-pass-list', $data);
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

		echo "Success";
		/*if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}*/
	}

	public function gatePassStatusChange()
	{
		$id = $this->input->post("id");
		$status = $this->input->post("status");
		$result = $this->gatepass->statusChange($id, $status);
		echo $result;
		/*if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}*/
	}
	
	public function gatePassCount()
	{
		$data['list'] = $this->gatepass->getGatepassCount();
		$this->load->view('gate-pass-list', $data);
	}

    function pdf_gen(){
        $this->load->library('pdfgenerator');

        $data['list'] = $this->gatepass->getGatepassList();
        $html = $this->load->view('gate-pass-pdf', $data, true);

        $this->pdfgenerator->generate($html);
    }

}




