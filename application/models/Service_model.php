<?php

class Service_model extends CI_Model
{
  private $_table = "service";

  function get($id)
  {
    $q = "SELECT * FROM `$this->_table` WHERE id_landing = '$id'";
    return $this->db->query($q)->result();
  }

  public function find($id)
  {
    if (!$id) {
      return;
    }

    $query = $this->db->get_where($this->_table, array('id' => $id));
    return $query->row();
  }

  public function insert($article)
  {
    return $this->db->insert($this->_table, $article);
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
