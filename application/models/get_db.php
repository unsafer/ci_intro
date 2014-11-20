<?php

class Get_db extends CI_Model{
    function getJugos(){
        $query = $this->db->query("SELECT * FROM jugos");
        return $query->result();
    }
    
    function insert1($data){
        $this->db->insert("test", $data);
        
    }
    
    function insert2($data){
        $this->db->insert_batch("jugos", $data);
    }
    
    function update1($data){
        $this->db->update('test', $data, 'id=1');
    }
    function getFrutas(){
        $query = $this->db->query("SELECT DISTINCT * FROM frutas");
        return $query->result();
    }
}