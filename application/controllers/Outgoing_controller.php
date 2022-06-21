<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Outgoing_controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('outgoing_model');
    }
    public function index()
    {
        $product['ed'] = $this->outgoing_model->fetchAllProducts();
        $this->load->view('nav');
       $this->load->view('outgoing', $product);
       $this->load->view('showOutgoing');
    }

    public function fetchProduct(){
        $product['ed'] = $this->outgoing_model->fetchAllProducts();
        $this->load->view('nav');
        $this->load->view('Outgoing',$product);
    
    }
    public function edit($OutgoingId)
    {
        $editData= new Outgoing_model;
        $editArr['ed'] = $editData->fetchOutgoingId($OutgoingId);

        $this->form_validation->set_rules('quantity', 'quantity', 'required|trim');
        $this->form_validation->set_rules('productId', 'productId', 'required|trim');
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('nav');
            $this->load->view('editOutgoing', $editArr);
        }else{
            $editData->editOutgoing($OutgoingId);
            redirect('showOutgoing');
        }
    }
    public function delete($OutgoingId)
    {
        $deleteData = new Outgoing_model;  
        $deleteArr['ed'] = $deleteData->fetchOutgoingId($OutgoingId);
        $deleteData->deleteOutgoing($OutgoingId);
        redirect('/')          ;
    }
   
    public function addOutgoing()
    {
        $Outgoing = new Outgoing_model;
        $Outgoing->addOutgoing();
        if($Outgoing){
        redirect('/');
    }
   
}
}
?>