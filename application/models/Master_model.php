<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class master_model extends CI_Model
{
  function load_code()
  {
    $this->db->select('*');
    $this->db->from('code');
    $this->db->order_by('id', 'desc');
    $query = $this->db->get();
    $result = $query->result_array();
    return $result;
  }
  function get_code($title)
  {
    $this->db->select('*');
    $this->db->from('code');
    $this->db->where('title', $title);
    $query = $this->db->get();
    $result = $query->result_array();
    if ($result) {
      return $result[0];
    } else {
      return false;
    }
  }
  function create_code($code, $title)
  {
    $data = array(
    'code' => $code,
    'title' => $title
    );
    $this->db->insert('code', $data);
  }
}
?>