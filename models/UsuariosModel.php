<?php
include_once "models/model.php";

class UsuariosModel extends Model {

  function getUsuario($email){
    $consulta = $this->db->prepare("SELECT * FROM usuario WHERE email = ?");
    $consulta->execute(array($email));
    return $consulta->fetch();
  }
  function getRol ($email) {
  $usuario = $this->getUsuario($email);
  return $usuario['privilegio'];
}
}
?>
