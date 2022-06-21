<?php
class ShowProduct_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->table="products";
        $this->primary_key="id";    
    }
    
    public function showProduct()
    {
        return $this->db->get('products');
    }
}
?>