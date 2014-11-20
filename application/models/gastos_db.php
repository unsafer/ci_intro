<?php

class Gastos_db extends CI_Model{
    function getGastos(){
        $query = $this->db->query("SELECT * FROM gastos");
        return $query->result();
    }
}