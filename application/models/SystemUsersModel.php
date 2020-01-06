<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26/4/2019
 * Time: 8:30 PM
 */
class SystemUsersModel extends CI_Model {

	private $system_user = 'system_users';

	function addSystemUser($data)
	{
		return	$this->db->insert($this->system_user, $data);
	}

	function statusChange($id, $status)
	{
		$data = array('status' => $status);
		$this->db->where('id', $id);
		return $this->db->update($this->system_user, $data);
	}

	function getStudentList()
	{
		$query = $this->db->get($this->system_user);

		if ($query) {
			return $query->result();
		}
		return NULL;
	}
}
