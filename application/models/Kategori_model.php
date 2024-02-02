<?php

class Kategori_model extends CI_Model
{
	private $_table = "kategori";

	public function get($limit = null, $offset = null)
	{
		$query = $this->db->get($this->_table, $limit, $offset);
		return $query->result();
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
		if(!$keyword){
			return null;
		}
		$this->db->like('nama_kategori', $keyword);
		$this->db->or_like('sidebar', $keyword);
		$query = $this->db->get($this->_table);
		return $query->result();
	}

  public function update_status_kategori($id, $data) {
		$this->db->where('id', $id);
		return $this->db->update($this->_table, $data);
	}

	public function insert($article)
	{
		return $this->db->insert($this->_table, $article);
	}

  public function count()
	{
		return $this->db->count_all($this->_table);
	}

	public function update($id, $data) {       
    $this->db->where('id', $id);
    $this->db->update($this->_table, $data);
    return  $this->db->affected_rows();
  }

	public function delete($id)
	{
		if (!$id) {
			return;
		}

		return $this->db->delete($this->_table, ['id' => $id]);
	}
}
