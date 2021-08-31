<?php

class M_data extends CI_Model
{
  function input_data($data, $table)
  {
    $this->db->insert($table, $data);
  }
  function edit_data($where, $table)
  {
    return $this->db->get_where($table, $where);
  }
  function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }
  function hapus_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
  public function get($id = null)
  {
    if ($id == null) {
      return $this->db->get('arsip')->result();
    } else {
      return $this->db->get_where('arsip', ['id_arsip' => $id])->result();
    }
  }
  function get_all_data_arsip()
  {
    return $this->db->get('arsip');
  }
}
