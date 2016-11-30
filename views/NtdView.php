<?php
include_once 'views/View.php';

class NtdView extends View{

function mostrar(){

  $this->smarty->display('index.tpl');
}
function mostrarContacto(){
  $this->smarty->display('contacto.tpl');
}

function Productos($categorias){
  $this->smarty->assign('categorias',$categorias);
  $this->smarty->display('Productos.tpl');
}
function mostrarProducto($producto){
  $this->smarty->assign('producto',$producto);
  $this->smarty->display('producto.tpl');
}
}
?>
