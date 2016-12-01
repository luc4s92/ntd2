<?php
/* Smarty version 3.1.30, created on 2016-12-01 01:30:28
  from "C:\xampp\htdocs\ntd2\templates\listadeproductos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583f6f24e75986_96368982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38056647463dc0820ad816d21538b18a655c7b5d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ntd2\\templates\\listadeproductos.tpl',
      1 => 1480552212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583f6f24e75986_96368982 (Smarty_Internal_Template $_smarty_tpl) {
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
    </li>
     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</li>
<?php }
}
