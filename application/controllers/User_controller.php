<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }
    public function index(){
        $fetch ['userDetail'] = $this->User_model->fetchUser();
        $this->load->view('nav');
        $this->load->view('user');
        $this->load->view('showUser');
    }
    public function edit($userId)
    {
        $editData= new User_model;
        $editArr['ed'] = $editData->fetchUserId($userId);

        $this->form_validation->set_rules('firstName', 'first name', 'required|trim');
        $this->form_validation->set_rules('lastName', 'last name', 'required|trim');
        $this->form_validation->set_rules('telephone', 'telephone', 'required|trim');
        $this->form_validation->set_rules('gender', 'gender', 'required|trim');
        $this->form_validation->set_rules('nationality', 'nationality', 'required|trim');
        $this->form_validation->set_rules('username', 'username', 'required|trim'); 
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');     

        if($this->form_validation->run() == FALSE){
            $this->load->view('nav');
            $this->load->view('editUser', $editArr);
        }else{
            $editData->editUser($userId);
            redirect('showUser');
        }
       
    }
    public function delete($userId)
    {
        $deleteData = new User_model;  
        $deleteArr['ed'] = $deleteData->fetchUserId($userId);
        $deleteData->deleteUser($userId);
        redirect('/')          ;
    }
    public function showUser()
    {
        $data['query'] = $this->User_model->showUser();
        $this->load->view('showUser',$data);
    }

    public function addUser(){

        $user = new User_model();
        $user->addUser();      
        if($user){redirect('/');
       
        }
    }

    
    }
    
    
?>