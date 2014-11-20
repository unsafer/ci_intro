<?php

class Math extends CI_Model{
    
    public function total(){
        $query = $this->db->query("SELECT * FROM frutas");
        return $query->result();
        
    }
    
    
    
    public function arreglo(){
        $query = $this->db->query("SELECT j.id as id, SUM(f.preciobase) AS suma
                              FROM frutas f, precios p
                              JOIN jugos j ON p.id = j.precios_id
                              JOIN jugos_has_frutas jhf ON j.id=jhf.jugos_id
                              WHERE jhf.frutas_id=f.id
                              GROUP BY j.id");
        return $query->result();
    }
    
    public function arreglo2(){
    
        $this->db->query("UPDATE precios
                        SET base = (SELECT SUM(f.preciobase) AS suma
                              FROM frutas f, precios p
                              JOIN jugos j ON p.id = j.precios_id
                              JOIN jugos_has_frutas jhf ON j.id=jhf.jugos_id
                              WHERE jhf.frutas_id=f.id)");
    }
    

    public function asignar2($total){    
        
        foreach ($total as $valor){
        $this->db->query("INSERT INTO precios (base) values ('.$valor->suma.')");
        }
    }


}