<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26/4/2019
 * Time: 8:30 PM
 */
class paymentModel extends CI_Model {

	private $payment = 'payment';

	function addPayment($data)
	{
		$this->db->insert($this->payment, $data);
	}

	function statusChange($id, $status)
	{
		$data = array('status' => $status);
		$this->db->where('id', $id);
		return $this->db->update($this->payment, $data);
	}

	function getPaymentList()
	{
		$query = $this->db->get($this->payment);

		if ($query) {
			return $query->result();
		}
		return NULL;
	}
	
	function getPaymentRowCount()
	{
		return $this->db->count_all($this->payment);
	}
	
	function getApprovedPaymentCount()
	{
		$this->db->get_where($this->gatePass, array('status' => '1'));
		$query = $this->db->get();
		return $query->num_rows(); 
	}
}
