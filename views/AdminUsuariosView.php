<?php
include_once 'views/View.php';

class AdminUsuariosView extends View{

  function mostrarUsuarios($usuarios){
    $this->smarty->assign('usuarios',$usuarios);
    $this->smarty->display('listausuarios.tpl');
  }
}
?>
