<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26/4/2019
 * Time: 8:30 PM
 */
class paymentModel extends CI_Model {

	private $expenses = 'expenses';

	function addexpenses($data)
	{
		$this->db->insert($this->expenses, $data);
	}

	function statusChange($id, $status)
	{
		$data = array('status' => $status);
		$this->db->where('id', $id);
		return $this->db->update($this->expenses, $data);
	}

	function getPaymentList()
	{
		$query = $this->db->get($this->expenses);

		if ($query) {
			return $query->result();
		}
		return NULL;
	}
}
