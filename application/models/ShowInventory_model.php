<?php
class ShowInventory_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->table="stk_inventory";
        $this->primary_key="id";    
    }
    
    public function showInventory()
    {
        return $this->db->get('stk_inventory');
    }
}
?>