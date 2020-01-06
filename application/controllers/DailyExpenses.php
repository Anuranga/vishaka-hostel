<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

if($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
	header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
	header('Access-Control-Allow-Headers: Content-Type');
	exit;
}

class DailyExpenses extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('StudentsModel', 'student');
	}

	public function index()
	{
		$this->load->view('forms-admission');
	}

	public function newExpense()
	{
		$this->load->view('forms-new-expense');
	}

	public function expensesList()
	{
		$this->load->view('expenses-list');
	}

	public function goingHome()
	{
		$this->load->view('forms-going-home');
	}

	public function dayOut()
	{
		$this->load->view('forms-day-out');
	}

	public function sportsOut()
	{
		$this->load->view('forms-sports-out');
	}

	public function otherOut()
	{
		$this->load->view('forms-other-out');
	}

	public function addExpenses()
	{
		$data = array(
			'fname' => $this->input->post("date"),
			'lname' => $this->input->post("category"),
			'phone' => $this->input->post("description"),
			'password' => $this->input->post("amount"),
			//'user_type' => $this->input->post("user-type"),
			//'status' => '0'
		);

		$result = $this->users->addSystemUser($data);
		echo "Success";
		/*if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}*/
	}

	public function StudentStatusChange()
	{
		$status = 2;
		$result = $this->student->statusChange(4, $status);

		/*if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}*/
	}

	public function GetStudentList()
	{
		$result = $this->student->getStudentList();
		print_r($result);

		/*if ($result) {
			$this->response($result, 200);
		} else {
			$this->response(array(), 200);
		}*/
	}

}
