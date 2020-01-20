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

	function getSystemUserList()
	{
		$query = $this->db->get($this->system_user);

		if ($query) {
			return $query->result();
		}
		return NULL;
	}
	
	function getUserCount()
	{
		return $this->db->count_all($this->system_user);
	}
	
	function getApprovedUserCount()
	{
		$this->db->get_where($this->system_user, array('status' => '1'));
		$query = $this->db->get();
		return $query->num_rows(); 
	}

	function validateLogin($data)
	{
		$this->db->select('user_type');
		$this->db->from('system_users');
		$this->db->where('email', 'jayan1@gmail.com');
		$this->db->where('password', '123456');
		$this->db->where('status', 1);
		$query = $this->db->get();
	
		if ($query) {
			$user_type = $query->result();

			return $user_type[0]->user_type;
		}else{

			 return false;
		}
	}

}
