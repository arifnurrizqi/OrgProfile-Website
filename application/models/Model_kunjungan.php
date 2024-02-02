<?php 
class Model_kunjungan extends CI_model{
  private $_table = "kunjungan";

  public function kunjungan(){
    $ip      = $_SERVER['REMOTE_ADDR'];
    $tanggal = date("Y-m-d");
    $waktu   = time(); 
    $cekk = $this->db->query("SELECT * FROM `$this->_table` WHERE ip='$ip' AND tanggal='$tanggal'");
    $rowh = $cekk->row_array();
    if($cekk->num_rows() == 0){
      $datadb = array('ip'=>$ip, 'tanggal'=>$tanggal, 'hits'=>'1', 'online'=>$waktu);
      $this->db->insert($this->_table, $datadb);
    }else{
      $hitss = $rowh['hits'] + 1;
      $datadb = array('ip'=>$ip, 'tanggal'=>$tanggal, 'hits'=>$hitss, 'online'=>$waktu);
      $array = array('ip' => $ip, 'tanggal' => $tanggal);
      $this->db->where($array);
      $this->db->update($this->_table, $datadb);
    }
  }

  function grafik_kunjungan(){
    $query = $this->db->query("SELECT count(*) as jumlah, tanggal FROM `$this->_table` GROUP BY tanggal ORDER BY tanggal DESC LIMIT 31");
    return $query->result(); // Mengembalikan hasil query sebagai objek array
  }
}