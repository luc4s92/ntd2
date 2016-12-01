<?php
/* Smarty version 3.1.30, created on 2016-12-01 04:42:05
  from "C:\xampp\htdocs\ntd2\templates\listaproductos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583f9c0dda3395_36903373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8933bc32eb57675b8978e36c29503e29a104f92d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ntd2\\templates\\listaproductos.tpl',
      1 => 1480563720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583f9c0dda3395_36903373 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria', false, 'adminProducto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['adminProducto']->value => $_smarty_tpl->tpl_vars['categoria']->value) {
?>
    <li>
      <h3><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</h3>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoria']->value['productos'], 'producto', false, 'adminProducto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['adminProducto']->value => $_smarty_tpl->tpl_vars['producto']->value) {
?>
      <li>
      <?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>

      <a class="updateProd" href="#" data-idproducto="<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"><span class="glyphicon glyphicon-pencil " aria-hidden="true"></span></a>
      <a class="eliminarProducto" href="#" data-idproducto="<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"><span class="glyphicon glyphicon-remove-sign " aria-hidden="true"></span></a>
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
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
<?php }
}
