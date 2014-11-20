<?php

class Jugos_db extends CI_Model{
    function getJugos(){
        $query = $this->db->query("SELECT * FROM jugos");
        return $query->result();
    }
    
    function updateJugos($base,$venta){
        
            $this->db->query("UPDATE jugos SET base=".$base.", venta=".$venta);
    }
}