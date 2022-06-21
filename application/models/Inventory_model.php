<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->table="stk_inventory"; 
        $this->primary_key="inventory_id";     
    }
   
    public function fetchInventory()
    {
       $this->db->select('*');
       $this->db->from('stk_inventory');
       $query = $this->db->get();
       return $query->result_array();
    }
    public function fetchInventoryid($inventoryid)
    {
       $this->db->select('*');
       $this->db->from('stk_inventory');
       $this->db->where('inventory_id',$inventoryid);
       $query = $this->db->get();
       return $query->result_array();
    }
    
    public function addInventory()
    {
        $data = array(
            "quantity" => $this->input->post('quantity'),
            "productId" => $this->input->post('productid'),
            "added_date" => $this->input->post('added_date'),
        );

        $this->db->set($data);
        $addInventory = $this->db->insert($this->table,$data);
            
        }   
        public function editInventory($id)
    {
       $data =  array(
        "quantity" => $this->input->post('quantity'),
        "productId" => $this->input->post('productId'),               
       );

       $this->db->set($data);
       $this->db->where('inventory_id', $id);
       $updateInventory = $this->db->update($this->table,$data);
    }  
    public function deleteInventory($id)
    {
     $this->db->where('inventory_id',$id);
     $deleteInventory = $this->db->delete('stk_inventory');
    }
    public function fetchAllProducts()
    {
       $this->db->select('*');
       $this->db->from('products');
       $query = $this->db->get();
       return $query->result_array();
    }   
    }
    

?>