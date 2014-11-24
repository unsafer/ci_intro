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
    function update_azucar(){        
        $f1 = $_POST['f1'];
        $this->db->query("UPDATE gastos SET azucar=".$f1);        
    }
    function update_leche(){        
        $f1 = $_POST['f1'];
        $this->db->query("UPDATE gastos SET leche=".$f1);        
    }
    function update_gastoscomunes(){        
        $f1 = $_POST['f1'];
        $this->db->query("UPDATE gastos SET gastoscomunes=".$f1);        
    }
    function update_manodeobra(){        
        $f1 = $_POST['f1'];
        $this->db->query("UPDATE gastos SET manodeobra=".$f1);        
    }
}