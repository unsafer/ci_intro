<?php

class Gastos_db extends CI_Model{
    function getGastos(){
        $query = $this->db->query("SELECT * FROM gastos");
        return $query->result();
    }
    function update_agua(){        
        $f1 = $_POST['f1'];
        $this->db->query("UPDATE gastos SET agua=".$f1);
        
    }
}