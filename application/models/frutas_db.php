<?php

class Frutas_db extends CI_Model{
    
    function getFrutas(){
        $query = $this->db->query("SELECT * FROM frutas");
        return $query->result();
    }
    
    function getPrecioKilo(){
        $query = $this->db->query("SELECT id,preciokilo FROM frutas");
        return $query->result();
    }
    
    function update_fruta($nombre_fruta,$precio_fruta){
        $this->db->query("UPDATE frutas SET preciokilo=".$precio_fruta." where nombre='".$nombre_fruta."'");
    }
}