<?php 
    class Ordenes extends Model { 
        public function getTodos() {
      //  $id_mesa = $this->db->escape($this->db->escapeWildcards($id_mesa));
        $this->db->query("SELECT * FROM ordenes");
        return $this->db->fetchAll();
        }
    }
?>