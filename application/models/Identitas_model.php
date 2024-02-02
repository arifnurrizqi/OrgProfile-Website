<?php

class Identitas_model extends CI_Model
{
	private $_table = "identitas";

	function get(){
    $q = "SELECT * FROM `$this->_table` ";
    return $this->db->query($q)->result();
  }

	public function update($data)
	{
		if (!$data['id']) {
			return;
		}
		return $this->db->update($this->_table, $data, ['id' => $data['id']]);
	}
}
