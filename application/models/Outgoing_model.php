<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Outgoing_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->table="outgoing"; 
        $this->primary_key="outgoingId";     
    }  
    public function fetchOutgoing()
    {
       $this->db->select('*');
       $this->db->from('outgoing');
       $query = $this->db->get();
       return $query->result_array();
    }
    public function fetchOutgoingid($inventoryid)
    {
       $this->db->select('*');
       $this->db->from('outgoing');
       $this->db->where('outgoingId',$inventoryid);
       $query = $this->db->get();
       return $query->result_array();
    }
    
    public function addOutgoing()
    {
        $data = array(
            "quantity" => $this->input->post('quantity'),
            "productId" => $this->input->post('productid'),
            "added_date" => $this->input->post('added_date'),
        );

        $this->db->set($data);
        $addOutgoing = $this->db->insert($this->table,$data);
            
        }   
        public function editOutgoing($id)
    {
       $data =  array(
        "quantity" => $this->input->post('quantity'),
        "productId" => $this->input->post('productId'),               
       );

       $this->db->set($data);
       $this->db->where('outgoingId', $id);
       $updateOutgoing = $this->db->update($this->table,$data);
    }  
    public function deleteOutgoing($id)
    {
     $this->db->where('outgoingId',$id);
     $deleteOutgoing = $this->db->delete('outgoing');
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