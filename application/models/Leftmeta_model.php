<?php

class Leftmeta_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function insertusermeta($postData) {
        $this->db->insert('leftmeta', $postData);
    }

    function deletemetadata($user_id, $key) {
        $this->db->where('user_id', $user_id);
        $this->db->where('leftmeta_metakey', $key);
        $this->db->delete('leftmeta');
    }

    function getLeftMeta($user_id) {
        $userArray = array();
        $this->db->where('user_id', $user_id);
        $getResult = $this->db->get('leftmeta')->result_array();

        foreach ($getResult as $key => $value) {
            $userArray[$value['leftmeta_metakey']] = $value['leftmeta_value'];
        }
        return $userArray;
    }
}
?>

