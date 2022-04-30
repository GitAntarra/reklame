<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model
{
    public function checkUser($username, $password)
    {
        
        $result = $this->db->where(['username' => $username, 'password' => $password])->get('user')->row_array();

        return $result;
    }
}