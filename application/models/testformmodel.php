<?php
    class Tesformmodel extends CI_Model{    
        function process(){
                    $email = $this->input->post('email');
                    $password = $this->input->post('password');
                    $data = array(
                        'email'=>$email,
                        'password'=>$password                    
                    );
                    $this->db->insert('users',$data);    
            }   
    }