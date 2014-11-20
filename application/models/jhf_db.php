<?php

class Jhf_db extends CI_Model{
    function getCantidad(){
        $query = $this->db->query("SELECT frutas_id,cantidad FROM jugos_has_frutas");
        return $query->result();
    }
   
}