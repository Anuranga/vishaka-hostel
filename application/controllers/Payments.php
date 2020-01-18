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
		$this->load->model('StudentsModel', 'student');
	}

	public function index()
	{
		$this->load->view('forms-new-payment');
	}

	public function newPayment()
	{
		$data['students'] = $this->student->getStudentsIdAndName();
		$this->load->view('forms-new-payment', $data);
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

	public function paymentStatusChange()
	{
		$status = 1;
		$id = $this->input->post("id");

		$result = $this->payment->statusChange($id, $status);
		
	}

	function pdf_gen_payments(){

    $this->load->library('pdfgenerator');

    $data['list'] = $this->payment->getPaymentList();
    $html = $this->load->view('payment-pdf', $data, true);

    $this->pdfgenerator->generate($html);
}



}
