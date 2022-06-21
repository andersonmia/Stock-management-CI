<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShowUser_controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ShowUser_model');
    }
    public function index(){
        $this->load->view('nav');
        $this->load->view('showUser');

    }
    public function getUser()
    {
        $data['query'] = $this->ShowUser_model->showUser();
        $this->load->view('nav');
        $this->load->view('showUser',$data);
    }
    
    }
    
    
?>