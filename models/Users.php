<?php 
class Users extends Model {
    public function getUserInfo () {
        $dni = $_SESSION['user']['dni'];
        $this->db->query("SELECT * FROM usuarios WHERE dni = '$dni'");
        return $this->db->fetchAll();
    }
}

?>