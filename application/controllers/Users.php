<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

if($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
	header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
	header('Access-Control-Allow-Headers: Content-Type');
	exit;
}

class Users extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('SystemUsersModel', 'users');
	}

	public function index()
	{
		$this->load->view('forms-basic');
	}

	public function usersView()
	{
		$this->load->view('tables-data-users');
	}

	public function login()
	{
		$this->load->view('page-login');
	}

	public function register()
	{
		$this->load->view('page-register');
	}

	public function forgetPassword()
	{
		$this->load->view('pages-forget');
	}

	public function leave()
	{
		$this->load->view('forms-principal-approval');
	}

	public function securityApproval()
	{
		$this->load->view('forms-security-approval');
	}

	public function AddSystemUser()
	{
		$fname = 'Jayan';
		$lname = 'Anuranga';
		$password = '34Ampara';
		$phone = '778990427';
		$user_type = '7';
		$status = '0';

		$data = array(
			'fname' => $fname,
			'lname' => $lname,
			'phone' => $phone,
			'password' => $password,
			'user_type' => $user_type,
			'status' => $status,
		);

		$result = $this->users->addSystemUser($data);

		/*if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}*/
	}

	public function UserStatusChange()
	{
		$status = 1;
		$result = $this->users->statusChange(1, $status);

		/*if ($result === FALSE) {
			$this->response(array('status' => 'failed'));
		} else {
			$this->response(array('status' => 'success'));
		}*/
	}

	public function GetUsersList()
	{
		$result = $this->users->getStudentList();
		print_r($result);

		/*if ($result) {
			$this->response($result, 200);
		} else {
			$this->response(array(), 200);
		}*/
	}

}
