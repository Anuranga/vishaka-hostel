<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26/4/2019
 * Time: 8:30 PM
 */
class LogModel extends CI_Model {

	private $studentlog = 'student_log';

	function insertRequestStudent(){
		echo('In the model');
	}

	function addLog($data)
	{
		return	$this->db->insert($this->studentlog, $data);
	}

	function statusChange($id, $status)
	{
		$data = array('approval_status' => $status);
		$this->db->where('id', $id);
		return $this->db->update($this->studentlog, $data);
	}

	function getLogList()
	{
		$query = $this->db->get($this->studentlog);

		if ($query) {
			return $query->result();
		}
		return NULL;
	}
}
