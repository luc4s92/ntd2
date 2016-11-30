<?php
/* Smarty version 3.1.30, created on 2016-11-30 02:36:06
  from "C:\xampp\htdocs\ntd2\templates\producto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583e2d064e0e99_96701935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3cd972b9d0667600560aaed4956e8724b5260f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ntd2\\templates\\producto.tpl',
      1 => 1480469692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583e2d064e0e99_96701935 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3>  <?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
</h3>
  <li>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['producto']->value['imagenes'], 'imagen', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['imagen']->value) {
?>
    <img class="imgpequenia" src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['path'];?>
"  class="img-thumbnail">
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </li>
<h4>Comentarios</h4>
<hr>

<hr>
<h4>Comentar</h4>

<hr>
<form id="formComentario"  enctype="multipart/form-data" action="agregar_comentario"  method="post">
<textarea class="form-control" rows="3" name="comentario" ></textarea>

<div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1"name="puntaje"  required value="">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
  </select>
</div>
  <input type="submit" data-idproducto="<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
" name="Agregar" value="enviar">
</form>
<?php }
}
