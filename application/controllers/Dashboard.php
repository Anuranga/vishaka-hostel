<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('GatePassModel', 'gatepass');
		$this->load->model('StudentsModel', 'student');
		$this->load->model('VisitorsModel', 'visitor');
	}

	public function index()
	{
		$data['gatePass'] = $this->gatePassCount();
		$data['student'] = $this->GetStudentsCount();
		$data['visitors'] = $this->GetVisitorsCount();
		
		$this->load->view('dashboard', $data);
	}
	
	public function gatePassCount()
	{
		return $this->gatepass->getGatepassList();
	}
	
	public function GetStudentsCount()
	{
		return $this->student->getStudentsCount();
	}
	
	public function GetVisitorsCount()
	{
		return $this->visitors->getVisitorsCount();
	}
	
}
