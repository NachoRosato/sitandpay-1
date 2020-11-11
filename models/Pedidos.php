<?php 
    class Pedidos extends Model { 
        public function getMenuByMesaId($id_mesa) {
        $id_mesa = $this->db->escape($this->db->escapeWildcards($id_mesa));
        $this->db->query("SELECT `id_menu` FROM ordenes WHERE id_mesa = '$id_mesa");
        return $this->db->fetchAll();
        }
    }
?>