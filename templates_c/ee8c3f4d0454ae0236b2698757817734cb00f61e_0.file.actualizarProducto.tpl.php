<?php
/* Smarty version 3.1.30, created on 2016-12-01 04:44:08
  from "C:\xampp\htdocs\ntd2\templates\actualizarProducto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583f9c881d8b07_33206044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee8c3f4d0454ae0236b2698757817734cb00f61e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ntd2\\templates\\actualizarProducto.tpl',
      1 => 1480563841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583f9c881d8b07_33206044 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form   method="post">
    <input type="text" name="producto"  id="nuevoProd" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
" >
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
    <label class="control-label">Adjuntar Imagenes</label>
    <input id="img" name="imagenes[]" type="file" class="file" multiple="true" data-show-upload="true" data-show-caption="true">
    <input type="submit" name="Actualizar" data-idproducto="<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
" id="ActualizarProductoBtn">
</form>
<?php }
}
