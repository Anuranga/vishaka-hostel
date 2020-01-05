<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

if($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
	header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
	header('Access-Control-Allow-Headers: Content-Type');
	exit;
}

class Payments extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('PaymentModel', 'payment');
	}

	public function index()
	{
		$this->load->view('forms-new-payment');
	}

	public function newPayment()
	{
		$this->load->view('forms-new-payment');
	}

	public function paymentList()
	{
		$data['list'] = $this->payment->getPaymentList();
		$this->load->view('payment-list', $data);
	}

	public function addPayment()
	{
		$data = array(
			'sid' => $this->input->post("sid"),
			'date' => $this->input->post("date"),
			'month' => $this->input->post("month"),
			'invoice_no' => $this->input->post("invoice")
		);

		$result = $this->payment->addPayment($data);
		echo "Success";
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
