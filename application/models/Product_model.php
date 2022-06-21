<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model{
    public function __construct()
    {
      parent::__construct();
      $this->table="products";
      $this->primary_key="productid";
    }
    public function fetchProduct()
    {
       $this->db->select('*');
       $this->db->from('products');
       $query = $this->db->get();
       return $query->result_array();
    }
    public function fetchProductId($productId)
    {
      $this->db->select('*');
      $this->db->from('products');
      $this->db->where('productId',$productId);
      $query = $this->db->get();
      return $query->result_array();
    }
    
    public function addProduct()
    {
      $data =  array(
         "product_Name" => $this->input->post('product_Name'),
         "brand" => $this->input->post('brand'),
         "supplier_phone" => $this->input->post('supplier_phone'),
         "supplier" => $this ->input->post('supplier'),       
         "added_date" => $this->input->post('added-date')
      );

      $this->db->set($data);
      $addProduct = $this->db->insert($this->table,$data);
    }
   
    public function editProduct($id)
    {
       $data =  array(
        "product_Name" => $this->input->post('product_Name'),
        "brand" => $this->input->post('brand'),
        "supplier_phone" => $this->input->post('supplier_phone'),
        "supplier" => $this ->input->post('supplier'),  
       );

       $this->db->set($data);
       $this->db->where('productId', $id);
       $updateProduct = $this->db->update($this->table,$data);
    }
    public function deleteProduct($id)
    {
     $this->db->where('productId',$id);
     $deleteProduct = $this->db->delete('products');
    }
}
?>