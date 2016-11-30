<?php
/* Smarty version 3.1.30, created on 2016-11-28 21:31:03
  from "C:\xampp\htdocs\ntd2\templates\Productos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583c9407cbcf48_66690731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f288606ec8268ecd15b24b569aaba2bbc140866a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ntd2\\templates\\Productos.tpl',
      1 => 1480365059,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583c9407cbcf48_66690731 (Smarty_Internal_Template $_smarty_tpl) {
?>

<h1> Lista de Productos </h1>

<ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria', false, 'adminProducto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['adminProducto']->value => $_smarty_tpl->tpl_vars['categoria']->value) {
?>
    <li>
      <h2><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</h2>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categoria']->value['productos'], 'producto', false, 'adminProducto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['adminProducto']->value => $_smarty_tpl->tpl_vars['producto']->value) {
?>
      <li>
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

      <a class="verProducto" href="#" data-idproducto="<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
" >Ver Producto</a>
      <hr>
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
