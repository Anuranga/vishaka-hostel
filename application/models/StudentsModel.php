<?php

class StudentsModel extends CI_Model {

	private $hostelStudents = 'hostel-student';

	function addStudent($data)
	{
		$this->db->insert($this->hostelStudents, $data);
	}

	function statusChange($id, $status)
	{

	    echo $status;
		$data = array('status' => $status);
		$this->db->set('status', $status);
		$this->db->where('id', $id);
		$result = $this->db->update($this->hostelStudents, $data);

		print_r($result); exit;
	}

	function getStudentList()
	{
            $this->db->select('*');
            $this->db->from('hostel-student');
            $query = $this->db->get();

        if ($query) {
            return $query->result();
        }

		return NULL;


	}

    function getStudentListSelected($status)
    {
        if($status != 'All'){
            $this->db->select('*');
            $this->db->from('hostel-student');
            $this->db->where('status', $status);
            $query = $this->db->get();

        }else{
            $this->db->select('*');
            $this->db->from('hostel-student');
            $query = $this->db->get();
        }

        echo json_encode($query->result());
        exit;
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