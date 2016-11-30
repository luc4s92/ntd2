<?php
/* Smarty version 3.1.30, created on 2016-11-28 21:39:22
  from "C:\xampp\htdocs\ntd2\templates\contacto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583c95fa861d17_21578433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cc3c5597e4dafd91d20015880d0f44c3187fc5b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ntd2\\templates\\contacto.tpl',
      1 => 1479168747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583c95fa861d17_21578433 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="view-header">          
          <div class="header-title">
            <h3 class="m-b-xs">Contactanos</h3>
            <small>Consulte por nuestros productos</small>
          </div>
        </div>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-filled">
          <div class="panel-heading">
            Formulario de contacto
          </div>
          <div class="panel-body">
              <form class="contacto" action="index.php?action=agregar_consulta" method="post">
                <div class="form-group"><label for="name">Nombre</label> <input type="name" required class="form-control" name="name" placeholder="Nombre"></div>
                  <div class="form-group"><label for="email">Email</label> <input type="email" class="form-control" name="mail" placeholder="mail@ejemplo.com" required></div>
                <div class="form-group"><label for="consulta">Su consulta</label> <textarea name="consulta" class="form-control" rows="3" placeholder="Escriba su consulta aqui..." required></textarea></div>
                  <div class="checkbox"><label> <input type="checkbox" name="notificacion"> Recibir notificaciones </label></div>
                  <button type="submit" class="btn btn-default">Enviar</button>
                </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
<?php }
}
