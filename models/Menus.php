<?php 
    // consulta a la base para traer todos los menus
    class Menus extends Model { 
        public function getTodos() {
            $this->db->query("SELECT * FROM menu");
            return $this->db->fetchAll();
        }

        public function getMenuById($ID) {
            $this->db->query("SELECT nombre FROM menu WHERE id_menu = '$ID' LIMIT 1");
            return $this->db->fetchAll();
        }
    }
?>