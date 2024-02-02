<?php

class About_model extends CI_Model
{
	private $_table = "about";

	function get()
	{
		$q = "SELECT * FROM $this->_table ORDER BY id DESC";
		return $this->db->query($q)->result();
	}

	public function find($id)
	{
		if (!$id) {
			return;
		}

		$query = $this->db->get_where($this->_table, array('id_landing' => $id));
		return $query->row();
	}

	public function insert($article)
	{
		return $this->db->insert($this->_table, $article);
	}

	public function update($article)
	{
		if (!isset($article['id_landing'])) {
			return;
		}

		return $this->db->update($this->_table, $article, ['id_landing' => $article['id_landing']]);
	}

	public function delete($id)
	{
		if (!$id) {
			return;
		}

		return $this->db->delete($this->_table, ['id' => $id]);
	}
}
