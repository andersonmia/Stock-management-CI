<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShowInventory_controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ShowInventory_model');
    }
    public function index(){
        $this->load->view('nav');
        $this->load->view('showInventory');

    }
    
    public function showInventory()
    {
        $data['query'] = $this->ShowInventory_model->showInventory();
        $this->load->view('nav');
        $this->load->view('showInventory',$data);
    }  

} 
?>