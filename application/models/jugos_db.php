<?php

class Jugos_db extends CI_Model{
    function getJugos(){
        $query = $this->db->query("select j.id, j.nombre, j.agua,j.azucar,j.leche, (SELECT GROUP_CONCAT(f.nombre)) as frutas,sum((jhf.cantidad*f.preciokilo)/1000) + ((j.agua*g.agua)+(j.azucar*g.azucar)+(j.leche*g.leche))/1000 as precio_base
                                   from gastos g, jugos_has_frutas jhf 
                                   join jugos j on j.id = jhf.jugos_id 
                                   join frutas f on f.id = jhf.frutas_id 
                                   group by j.id");
        return $query->result();
    }
    
    function updateJugos($base,$venta){
        
            $this->db->query("UPDATE jugos SET base=".$base.", venta=".$venta);
    }

}