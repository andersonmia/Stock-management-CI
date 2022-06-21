<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShowProduct_controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ShowProduct_model');
    }
    public function index(){
        $this->load->view('nav');
        $this->load->view('showProduct');

    }
    public function showProduct()
    {
        $data['query'] = $this->ShowProduct_model->showProduct();
        $this->load->view('nav');
        $this->load->view('showProduct',$data);
    }  

} 
?>