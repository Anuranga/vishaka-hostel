<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26/4/2019
 * Time: 8:30 PM
 */
class StudentsModel extends CI_Model {

	private $hostelStudents = 'hostel-student';

	function insertRequestStudent(){
		// echo('In the model');
	}

	function addStudent($data)
	{
		$this->db->insert($this->hostelStudents, $data);
	}

	function statusChange($id, $status)
	{
		$data = array('status' => $status);
		$this->db->where('id', $id);
		return $this->db->update($this->hostelStudents, $data);
	}

	function getStudentList()
	{
		$query = $this->db->get($this->hostelStudents);

		if ($query) {
			return $query->result();
		}
		return NULL;
	}
}
