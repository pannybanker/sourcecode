<?php

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function login($username, $password) {
        $this->db->trans_start();
        $this->db->where('user_email', $username);
        $this->db->where('user_password', $password);
        $getResult = $this->db->get('user_account')->row_array();
        $this->db->trans_complete();
        if (!empty($getResult)) {
            return $getResult;
        } else {
            return false;
        }
    }
    
    function checkemailId($username) {
        $this->db->trans_start();
        $this->db->where('user_email', $username);
        $getResult = $this->db->get('user_account')->row_array();
        $this->db->trans_complete();
        if (!empty($getResult)) {
            return $getResult;
        } else {
            return false;
        }
    }

    function check_user_package($user_id = null) {
        $this->db->trans_start();
        $this->db->where('pay_userid', $user_id);
        $this->db->where('pay_current_status', 1);
        $getResult = $this->db->get('user_package')->row_array();
        $this->db->trans_complete();
        if (!empty($getResult)) {
            return $getResult;
        } else {
            return false;
        }
    }

    function upgrade_package($postData,$id)
    {
        $this->db->where('pay_userid', $id);
        $this->db->update('user_package', $postData);
        return true; 
    }

    function register($postData) {
        $this->db->trans_start();
        $this->db->insert('user_account', $postData);
        $lastId = $this->db->insert_id();
        $this->db->trans_complete();
        return $lastId;
    }
    
    function insertPackege($postData) {
        $this->db->trans_start();
        $this->db->insert('user_package', $postData);
        $lastId = $this->db->insert_id();
        $this->db->trans_complete();
        return $lastId;
    }

    function encrypt_customer_password($paswd) {
        $mykey = $this->getEncryptKey();
        $encryptedPassword = $this->encryptPaswd($paswd, $mykey);
        return $encryptedPassword;
    }

    function decrypt_customer_password($paswd) {
        $mykey = $this->getEncryptKey();
        $decryptedPassword = $this->decryptPaswd($paswd, $mykey);
        return $decryptedPassword;
    }

    function getEncryptKey() {
        return base64_encode('erwtretv');
    }

    function encryptPaswd($string, $key) {
        $result = '';
        for ($i = 0; $i < strlen($string); $i++) {
            $char = substr($string, $i, 1);
            $keychar = substr($key, ($i % strlen($key)) - 1, 1);
            $char = chr(ord($char) + ord($keychar));
            $result .= $char;
        }
        return base64_encode($result);
    }

    function decryptPaswd($string, $key) {
        $result = '';
        $string = base64_decode($string);
        for ($i = 0; $i < strlen($string); $i++) {
            $char = substr($string, $i, 1);
            $keychar = substr($key, ($i % strlen($key)) - 1, 1);
            $char = chr(ord($char) - ord($keychar));
            $result .= $char;
        }
        return $result;
    }

    function insertusermeta($postData) {
        $this->db->insert('usermeta', $postData);
    }

    function deletemetadata($user_id, $key) {
        $this->db->where('user_id', $user_id);
        $this->db->where('usermeta_metakey', $key);
        $this->db->delete('usermeta');
    }

    function getUserMeta($user_id) {
        $userArray = array();
        $this->db->where('user_id', $user_id);
        $getResult = $this->db->get('usermeta')->result_array();

        foreach ($getResult as $key => $value) {
            $userArray[$value['user_id']][$value['usermeta_metakey']] = $value['usermeta_value'];
        }
        return $userArray;
    }

}
?>

