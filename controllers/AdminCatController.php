<?php
include_once 'controllers/controller.php';
include_once 'views/AdminCatView.php';
include_once 'models/AdminCatModel.php';

class AdminCatController extends Controller  {

  function __construct() {
    $this->model = new AdminCatModel();
    $this->view = new AdminCatView();
    $this->checkSesion();
    $this->checkAdmin();
  }

  function mostrarAdminCat(){
    $categorias = $this->model->getCategorias();
    $this->view->adminCat($categorias);
  }

  function guardarCategoria(){

      $categoria = $_POST['categoria'];
      $this->modelo->crearCategoria($categoria);
      $categorias = $this->modelo->getCategorias();
      $this->vista->listaAdminCat($categorias);

  }

  function updateCat(){

          $id_categoria = $_GET['id_categoria'];
          $categoria = $this->modelo->getCategoria($id_categoria);
          $this->vista->editCat($categoria);

  }

  function actualizarCat(){

      $id_categoria = $_POST['id_categoria'];
      $nuevacat = $_POST['nuevacat'];
      $this->modelo->editarCategoria($id_categoria,$nuevacat);

  }

  function borrarCategoria(){

        $key = $_GET['id_categoria'];
        $this->modelo->eliminarCategoria($key);
        $categorias = $this->modelo->getCategorias();
        $this->vista->listaAdminCat($categorias);

  }
}

?>
