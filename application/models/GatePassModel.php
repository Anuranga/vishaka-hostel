<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26/4/2019
 * Time: 8:30 PM
 */
class GatePassModel extends CI_Model {

	private $gatePass = 'gate_pass';

	function addGatePass($data)
	{
		print_r($data);
		$this->db->insert($this->gatePass, $data);
	}

	function statusChange($id, $status)
	{
		$data = array('status' => $status);
		$this->db->where('id', $id);
		return $this->db->update($this->gatePass, $data);
	}

	function getGatepassList()
	{
		$query = $this->db->get($this->gatePass);

		if ($query) {
			return $query->result();
		}
		return NULL;
	}
}
