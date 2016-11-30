<?php

include_once 'views/LoginView.php';
include_once 'models/UsuariosModel.php';

class LoginController  {

  function __construct() {
    $this->model = new UsuariosModel();
    $this->view = new LoginView();
  }

  function logout(){
    session_start();
    session_destroy();
    header("Location: index.php");
    die();
  }

  function login(){
    if(isset($_REQUEST["txtEmail"]) && isset($_REQUEST["txtPassword"]))
    {
      $email = $_REQUEST["txtEmail"];
      $pass = $_REQUEST["txtPassword"];

      $usuario = $this->model->getUsuario($email);

      if(password_verify($pass, $usuario["password"]))
      {
        session_start();
        $_SESSION["email"] = $email;
        $_SESSION["privilegio"] = $this->model->getRol($email);
        print_r($_SESSION["privilegio"]);
        echo $_SESSION["email"];
        header("Location: index.php?action=mostrar_admin"); // cambiar para que muestre la foto
        die();
      }
      else {
        $this->view->mostrarError("Usuario y password invalidos");
      }
    }

    $this->view->mostrar();
  }
}

?>
