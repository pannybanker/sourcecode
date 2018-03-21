<?php
class Main_model extends CI_Model{
function __construct() {
parent::__construct();
}
function post_insert($data){
// Inserting in Table(students) of Database(college)
$this->db->insert('users', $data);


}



function get_all_posts($id="..")
{
 $this->db->where('user_id',$id);

   $query=$this->db->get('users');
  
        return $query->result_array();
}




function get_posts_id($id)
{

$this->db->where('id',$id);

   $query=$this->db->get('users');
        return $query->result_array();
}
}
?>
