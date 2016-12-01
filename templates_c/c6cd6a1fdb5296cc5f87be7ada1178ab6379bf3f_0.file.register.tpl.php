<?php
/* Smarty version 3.1.30, created on 2016-12-01 03:07:26
  from "C:\xampp\htdocs\ntd2\templates\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583f85dee88500_39283922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6cd6a1fdb5296cc5f87be7ada1178ab6379bf3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ntd2\\templates\\register.tpl',
      1 => 1479855770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583f85dee88500_39283922 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
  <div class="col-sm-5 col-md-6 col-md-offset-3">
<form id="formUsuario" action="guardar_usuario" method="post">

    <label >Email address</label>
    <input type="email" class="form-control" name="usuario" placeholder="Email">


    <label >Password</label>
    <input type="password" class="form-control" name="pw" placeholder="Password">


  <input type="submit" name="Registrarse" id="agregarUsuarioBtn">
</form>
</div>
</div>
<?php }
}
