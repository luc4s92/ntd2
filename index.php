<?php
include_once 'config/ConfigApp.php';
include_once 'controllers/NtdController.php';
include_once 'controllers/LoginController.php';
include_once 'controllers/AdminCatController.php';
include_once 'controllers/AdminProdController.php';


if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) ||
$_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_DEFAULT)
{
  $NtdController = new NtdController();
  $NtdController->mostrarHome();
}
else {
switch ($_REQUEST[ConfigApp::$ACTION]){
  //  case ConfigApp::$ACTION_MOSTRAR_LOGIN:
    //  $NtdController = new LoginController();
      //$NtdController->login();
      //break;
    case ConfigApp::$ACTION_LOGIN:
      $NtdController = new LoginController();
      $NtdController->login();
      break;
    case ConfigApp::$ACTION_LOGOUT:
      $NtdController = new LoginController();
      $NtdController->logout();
      break;
    case ConfigApp::$ACTION_MOSTRAR_ADMINCAT:
      $NtdController = new AdminCatController();
      $NtdController->mostrarAdminCat();
      break;
    case ConfigApp::$ACTION_MOSTRAR_PRODUCTOS:
      $NtdController = new NtdController();
      $NtdController->verProductos();
      break;
    case ConfigApp::$ACTION_CONTACTO:
      $NtdController = new NtdController();
      $NtdController->mostrar_contacto();
      break;
    case ConfigApp::$ACTION_MOSTRAR_ADMINPROD:
      $NtdController = new AdminProdController();
      $NtdController->mostrarAdminProd();
      break;
    case ConfigApp::$ACTION_VER_PRODUCTO:
      $NtdController = new NtdController();
      $NtdController->verProducto();
        break;
    default:
      echo 'Pagina no encontrada';
      break;
  }

}




?>
