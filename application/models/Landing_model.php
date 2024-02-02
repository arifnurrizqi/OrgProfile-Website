<?php

class Landing_model extends CI_Model
{
	private $_table = "landing";

	function get()
	{
		$q = "SELECT * FROM landing ORDER BY tahun_periode DESC";
		return $this->db->query($q)->result();
	}

	public function getLandingBy($p1, $p2)
	{
		$q = "SELECT l.id, l.organisasi, l.universitas, l.kabinet, l.tahun_periode, l.about, l.logo, l.slug, a.visi, a.misi, a.filosofi, a.booklet, a.img_cover, a.img_visi, a.img_misi, l.status  
		FROM `about` AS a INNER JOIN `landing` AS l ON 
		a.id_landing = l.id 
		WHERE $p1 = $p2";
		return $this->db->query($q)->result();
	}

	public function getLandingAndPengurus(){
		$q = "SELECT l.id, l.kabinet, l.tahun_periode, l.logo, l.slug, p.level, p.nama, p.jabatan, p.prodi, p.angkatan  
		FROM `pengurus` AS p INNER JOIN `landing` AS l ON 
		p.id_landing = l.id 
		WHERE level = 1 ORDER BY `l`.`tahun_periode` ASC";
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

	public function delete($id)
	{
		if (!$id) {
			return;
		}

		return $this->db->delete($this->_table, ['id' => $id]);
	}
}
