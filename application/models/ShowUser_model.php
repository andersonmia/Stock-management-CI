<?php
class ShowUser_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->table="users";
        $this->primary_key="id";    
    }
    
    public function showUser()
    {
        return $this->db->get('users');
    }
}
?>