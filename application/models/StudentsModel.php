<?php

class StudentsModel extends CI_Model {

	private $hostelStudents = 'hostel-student';

	function addStudent($data)
	{
		$this->db->insert($this->hostelStudents, $data);
	}

	function statusChange($id, $status)
	{
		$data = array('status' => $status);
		$this->db->set('status', $status);
		$this->db->where('id', $id);
		$result = $this->db->update($this->hostelStudents, $data);

		print_r($result); exit;
	}

	function getStudentList()
	{
		$this->db->select('*');
		$query = $this->db->get($this->hostelStudents);

		if ($query) {
			return $query->result();
		}
		return NULL;
	}
	
	function getStudentsCount()
	{
		return $this->db->count_all($this->hostelStudents);
	}
	
	function getStudentsIdAndName()
	{
		$this->db->select('id, full_name');
		$query = $this->db->get($this->hostelStudents);
		return $query->result();
	}

	function getApprovedStudentsCount()
	{
		$this->db->get_where($this->hostelStudents, array('status' => '1'));
		$query = $this->db->get();
		return $query->num_rows(); 
	}

}