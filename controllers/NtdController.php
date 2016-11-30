<?php
//include_once 'controllers/controller.php';
include_once 'views/NtdView.php';
include_once 'models/NtdModel.php';

class NtdController   {

  function __construct() {
    $this->modelo = new NtdModel();
    $this->vista = new NtdView();
//    $this->checkSesion();
  }

  function mostrarHome(){
    $this->vista->mostrar();
  }
  function verProductos(){
    $categorias = $this->modelo->getCategorias();
    $this->vista->Productos($categorias);
  }
  function verProducto(){
    $id_producto = $_GET['id_producto'];
    $producto = $this->modelo->getProducto($id_producto);
    $this->vista->mostrarProducto($producto);
  }

function mostrar_contacto() {
  $this->vista->mostrarContacto();
}


}

?>
