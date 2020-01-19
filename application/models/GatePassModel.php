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
		$query = $this->db->query("SELECT *, 
		`gate_pass`.`id`,
		`visitors`.`full_name`,
		`visitors`.`mobile`,
		`gate_pass`.`reason`,
		`gate_pass`.`out_time`,
		`gate_pass`.`in_time`,
		`gate_pass`.`status`
		FROM `gate_pass` 
		JOIN `visitors` ON `visitors`.`id` = `gate_pass`.`vid`");
		if ($query) {
			return $query->result();
		}

		return NULL;
	}
	
	function getGatePassCount()
	{
		return $this->db->count_all($this->gatePass);
	}
	
	function getApprovedGatePassCount()
	{
		$this->db->get_where($this->gatePass, array('status' => '1'));
		$query = $this->db->get();
		return $query->num_rows(); 
	}
}
