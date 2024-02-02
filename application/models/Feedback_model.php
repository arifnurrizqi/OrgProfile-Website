<?php

class Feedback_model extends CI_Model
{
	private $_table = "feedback";

	public function rules()
	{
		return [
			[
				'field' => 'name', 
				'label' => 'Name', 
				'rules' => 'required|max_length[32]'
			],
			[
				'field' => 'email', 
				'label' => 'Email', 
				'rules' => 'required|valid_email|max_length[32]'
			],
			[
				'field' => 'message', 
				'label' => 'Message', 
				'rules' => 'required'],
		];
	}

	public function insert($feedback)
	{
		if (!$feedback) {
			return;
		}

		return $this->db->insert($this->_table, $feedback);
	}

	public function get()
	{
		$q = "SELECT *
		FROM feedback
		ORDER BY
			`status` ASC,         -- Urutkan berdasarkan status secara ascending
			CASE WHEN `status` = 1 THEN `created_at` ELSE NULL END DESC
		";
		return $this->db->query($q)->result();
	}
	
	public function check_pesan()
	{
		$q = "SELECT COUNT(*) AS ada_pesan
		FROM feedback
		WHERE status = 0";
		return $this->db->query($q)->result();
	}
	
	public function update_status($id, $data)
	{
		$this->db->where('id', $id);
    $this->db->update($this->_table, $data);
    return  $this->db->affected_rows();
	}

	public function count()
	{
		return $this->db->count_all($this->_table);
	}

	public function delete($id)
	{
		if (!$id) {
			return;
		}

		$this->db->delete($this->_table, ['id' => $id]);
	}
}
