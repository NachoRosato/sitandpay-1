<?php 
//model 
    class Mesas extends Model { 
        public function getTodos() {
            $this->db->query("SELECT * FROM mesa");
            return $this->db->fetchAll();
        }
    }
?>