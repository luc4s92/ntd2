<?php
require 'api.php';
include_once '../models/ComentariosModel.php';

define('ACTION_AGREGAR', 'agregar_comentario');
class ComentariosApi extends Api
{
  private $model;
  public function __construct($request)
 {
    parent::__construct($request);
    $this->model = new ComentariosModel();
  }
  protected function comentarios($argumentos){
    switch ($this->method) {
    ////  case 'GET':
    ////      if(count($argumentos)>0){
    ////        $tarea = $this->model->getTarea($argumentos[0]);
    ////        $error['Error'] = "La tarea no existe";
    ////        return ($tarea) ? $tarea : $error;
      ////    }else{
      ////      return $this->model->getTareas();
      ////    }
      ////  break;
  //    case 'DELETE':
  //        if(count($argumentos)>0){
  //          $error['Error'] = "La tarea no existe";
    //        $success['Success'] = "La tarea se borro";
      //      $filasAfectadas = $this->model->eliminarTarea($argumentos[0]);
    //        return ($filasAfectadas == 1) ? $success : $error;
      //    }
    //    break;
        case 'POST':
            if(count($argumentos)==0){
              $error['Error'] = "La tarea no se creo";
              $comentario = $_POST['comentario'];
              $puntaje = $_POST['puntaje'];
              $id_comentario = $this->model->crearComentario($comentario,$puntaje );
              //return ($id_tarea > 0) ? $this->model->getComentario($id_comentario) : $error;
            }
          break;
      default:
           return "Only accepts GET";
        break;
    }
   }
}
 ?>
