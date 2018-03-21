<?php
class PostModel extends CI_Model {
 
 function getPosts(){
  $this->db->select("title,link"); 
  $this->db->from('users');
  $query = $this->db->get();
  return $query->result();
 }
 
}
?>