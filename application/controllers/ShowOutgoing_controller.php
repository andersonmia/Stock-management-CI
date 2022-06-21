<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShowOutgoing_controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ShowOutgoing_model');
    }
    public function index(){
        $this->load->view('nav');
        $this->load->view('showOutgoing');

    }
    
    public function showOutgoing()
    {
        $data['query'] = $this->ShowOutgoing_model->showOutgoing();
        $this->load->view('nav');
        $this->load->view('showOutgoing',$data);
    }  

} 
?>