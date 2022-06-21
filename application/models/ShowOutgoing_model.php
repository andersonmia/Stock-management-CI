<?php
class ShowOutgoing_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->table="outgoing";
        $this->primary_key="id";    
    }
    
    public function showInventory()
    {
        return $this->db->get('outgoing');
    }
}
?>