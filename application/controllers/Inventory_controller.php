<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inventory_controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('inventory_model');
    }
    public function index()
    {
        $product['ed'] = $this->inventory_model->fetchAllProducts();
        $this->load->view('nav');
       $this->load->view('inventory', $product);
       $this->load->view('showInventory');
    }

    public function fetchProduct(){
        $product['ed'] = $this->inventory_model->fetchAllProducts();
        $this->load->view('nav');
        $this->load->view('inventory',$product);
    
    }
    public function edit($InventoryId)
    {
        $editData= new Inventory_model;
        $editArr['ed'] = $editData->fetchInventoryId($InventoryId);

        $this->form_validation->set_rules('quantity', 'Inventory name', 'required|trim');
        $this->form_validation->set_rules('productId', 'productId', 'required|trim');
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('nav');
            $this->load->view('editInventory', $editArr);
        }else{
            $editData->editInventory($InventoryId);
            redirect('showInventory');
        }
    }
    public function delete($InventoryId)
    {
        $deleteData = new Inventory_model;  
        $deleteArr['ed'] = $deleteData->fetchInventoryId($InventoryId);
        $deleteData->deleteInventory($InventoryId);
        redirect('/')          ;
    }
   
    public function addInventory()
    {
        $Inventory = new Inventory_model;
        $Inventory->addInventory();
        if($Inventory){
        redirect('/');
    }
   
}
}
?>