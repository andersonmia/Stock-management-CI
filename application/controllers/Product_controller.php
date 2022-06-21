<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
    }
    public function index()
    {
        $fetch ['prodDetail'] = $this->Product_model->fetchProduct();
        $this->load->view('nav');
       $this->load->view('product');
       $this->load->view('showProduct');
    }
    public function edit($productId)
    {
        $editData= new Product_model;
        $editArr['ed'] = $editData->fetchProductId($productId);

        $this->form_validation->set_rules('product_Name', 'product name', 'required|trim');
        $this->form_validation->set_rules('brand', 'brand', 'required|trim');
        $this->form_validation->set_rules('supplier_phone', 'supplier_phone', 'required|trim');
        $this->form_validation->set_rules('supplier', 'supplier name', 'required|trim');

        if($this->form_validation->run() == FALSE){
            $this->load->view('nav');
            $this->load->view('editProduct', $editArr);
        }else{
            $editData->editProduct($productId);
            redirect('showProduct');
        }
    }
    public function delete($productId)
    {
        $deleteData = new Product_model;  
        $deleteArr['ed'] = $deleteData->fetchproductId($productId);
        $deleteData->deleteProduct($productId);
        redirect('/')          ;
    }
   
    public function addProduct()
    {
        $product = new Product_model;
        $product->addProduct();
        if($product){
            redirect('/');
        }
    }
   
}
?>