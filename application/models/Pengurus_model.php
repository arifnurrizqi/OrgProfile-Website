<?php

class Pengurus_model extends CI_Model
{
	private $_table = "pengurus";

	public function get($id_landing, $id_pengurus)
	{
		$q = "SELECT * FROM `$this->_table` WHERE id = '$id_pengurus' AND id_landing = '$id_landing'";
		return $this->db->query($q)->result();
	}

	public function findPositionByIdLanding($level, $id_landing)
	{
		$q = "SELECT * FROM `$this->_table` WHERE level = '$level' AND id_landing = '$id_landing'";
		return $this->db->query($q)->result();
	}

	public function findMenteriByIdKoordinator($id, $id_landing)
	{
		$q = "SELECT * FROM `$this->_table` WHERE id_ref = '$id' AND level = '3' AND id_landing = '$id_landing'";
		return $this->db->query($q)->result();
	}

	public function findStafByIdMenteri($id, $id_landing)
	{
		$q = "SELECT * FROM `$this->_table` WHERE id_ref = '$id' AND level = '4' AND id_landing = '$id_landing'";
		return $this->db->query($q)->result();
	}

	public function findMenteriByIdLanding($id_landing)
	{
		$q = "SELECT * FROM `$this->_table` WHERE id_ref = '0' AND level = '3' AND id_landing = '$id_landing'";
		return $this->db->query($q)->result();
	}

	public function getPengurusByLanding($idLanding)
	{
		// Sesuaikan dengan struktur tabel dan relasinya
		$this->db->where('id_landing', $idLanding);
		return $this->db->get('pengurus')->result();
	}

	public function find_by_slug($slug)
	{
		if (!$slug) {
			return;
		}
		$query = $this->db->get_where($this->_table, ['slug' => $slug]);
		return $query->row();
	}

	public function find($id)
	{
		if (!$id) {
			return;
		}

		$query = $this->db->get_where($this->_table, array('id' => $id));
		return $query->row();
	}

	public function search($keyword)
	{
		if (!$keyword) {
			return null;
		}
		$this->db->like('kabinet', $keyword);
		$this->db->or_like('tahun_periode', $keyword);
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function update_status_landing($id)
	{
		// Langkah 1: Set semua nilai "status" menjadi "false"
		$this->db->update($this->_table, array('status' => 'false'));

		// Langkah 2: Set nilai "status" menjadi "true" pada satu baris tertentu
		$this->db->where('id', $id);
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

	public function count()
	{
		return $this->db->count_all($this->_table);
	}

	public function delete($id)
	{
		if (!$id) {
			return;
		}

		return $this->db->delete($this->_table, ['id' => $id]);
	}
}
