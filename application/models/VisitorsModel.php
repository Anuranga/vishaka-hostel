<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26/4/2019
 * Time: 8:30 PM
 */
class VisitorsModel extends CI_Model {

	private $visitors = 'visitors';

	function insertRequestStudent(){
		echo('In the model');
	}

	function addVisitor($data)
	{
		return	$this->db->insert($this->visitors, $data);
	}

	function statusChange($id, $status)
	{
		$data = array('status' => $status);
		$this->db->where('id', $id);
		return $this->db->update($this->visitors, $data);
	}

	function getVisitorsList()
	{
		$query = $this->db->get($this->visitors);

		if ($query) {
			return $query->result();
		}
		return NULL;
	}
	
	function getVisitorsCount()
	{
		return $this->db->count_all($this->visitors);
	}
	
	function getActiveVisitorsCount()
	{
		$this->db->get_where($this->visitors, array('status' => '1'));
		$query = $this->db->get();
		return $query->num_rows(); 
	}

}
