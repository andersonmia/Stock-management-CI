<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->table="users"; 
        $this->primary_key="userid";     
    }
    public function fetchUser()
    {
       $this->db->select('*');
       $this->db->from('users');
       $query = $this->db->get();
       return $query->result_array();
    }
    public function fetchUserId($userId)
    {
       $this->db->select('*');
       $this->db->from('users');
       $this->db->where('userId',$userId);
       $query = $this->db->get();
       return $query->result_array();
    }
    
    public function addUser()
    {
        $data = array(
            "firstName" => $this->input->post('firstname'),
            "lastName" => $this->input->post('lastname'),
            "telephone" => $this->input->post('telephone'),
            "gender" => $this ->input->post('gender'),
            "nationality" => $this->input->post('nationality'),
            "username" => $this->input->post('username'),
            "email" => $this->input->post('email'),
            "password" => $this->input->post('password'),
            "added_time" =>date('Y-m-d')
        );

        $this->db->set($data);
        $addUser = $this->db->insert($this->table,$data);
            
        }   
        public function editUser($id)
    {
       $data =  array(
        "firstName" => $this->input->post('firstName'),
        "lastName" => $this->input->post('lastName'),
        "telephone" => $this->input->post('telephone'),
        "gender" => $this ->input->post('gender'), 
        "nationality" => $this->input->post('nationality'),
        "username" => $this->input->post('username'),
        "email" => $this->input->post('email'),
        "password" => $this->input->post('password'),
       );

       $this->db->set($data);
       $this->db->where('userId', $id);
       $updateUser = $this->db->update($this->table,$data);
    }  
    public function deleteUser($id)
    {
     $this->db->where('userId',$id);
     $deleteUser = $this->db->delete('users');
    }
    }
   

?>