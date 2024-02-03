<?php

class Templates_model extends CI_Model
{
	private $_table = "templates";

	function get()
	{
		$q = "SELECT * FROM $this->_table";
		return $this->db->query($q)->result();
	}

	function getTemplateBy($p1, $p2) {
    $q = "SELECT * FROM $this->_table WHERE $p1 = '$p2'";
		return $this->db->query($q)->result();
  }

	public function count()
	{
		return $this->db->count_all($this->_table);
	}

	public function find($id)
	{
		if (!$id) {
			return;
		}

		$query = $this->db->get_where($this->_table, array('id' => $id));
		return $query->row();
	}

	public function update_status_template($id)
	{
		// Langkah 1: Set semua nilai "status" menjadi "false"
		$this->db->update($this->_table, array('status' => 'false'));

		// Langkah 2: Set nilai "status" menjadi "true" pada satu baris tertentu
		$this->db->where('id_template', $id);
		return $this->db->update($this->_table, array('status' => 'true'));
	}

	public function insert($article)
	{
		return $this->db->insert($this->_table, $article);
	}

	public function update($article)
	{
		if (!isset($article['id'])) {
			return;
		}

		return $this->db->update($this->_table, $article, ['id' => $article['id']]);
	}

	public function delete($id)
	{
		if (!$id) {
			return;
		}

		return $this->db->delete($this->_table, ['id' => $id]);
	}
}
