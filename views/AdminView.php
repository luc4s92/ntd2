<?php
include_once 'views/View.php';

class AdminView extends View{

function mostrar(){
//  $this->smarty->assign('errores', $this->errores);
  $this->smarty->display('hola.tpl');
}


}


?>
