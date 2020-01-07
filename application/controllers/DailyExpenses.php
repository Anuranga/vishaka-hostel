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
		$this->load->model('ExpensesModel', 'expenses');
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
		$data['list'] = $this->expenses->getExpensesList();
		$this->load->view('expenses-list', $data);
	}

	public function addExpenses()
	{
		$data = array(
			'date' => $this->input->post("date"),
			'category' => $this->input->post("category"),
			'description' => $this->input->post("description"),
			'amount' => $this->input->post("amount")
			//'status' => '0'
		);

		$result = $this->expenses->addExpenses($data);
		echo "Success";
		/*if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}*/
	}

}
