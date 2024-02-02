<?php

class FokusIsu_model extends CI_Model
{
  private $_table = "fokus_isu";

  function get($id)
  {
    $q = "SELECT * FROM `$this->_table` WHERE id_landing = '$id'";
    return $this->db->query($q)->result();
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

  public function insert($data)
  {
    return $this->db->insert($this->_table, $data);
  }

  public function update($id, $data)
  {
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
