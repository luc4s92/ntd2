<?php
/* Smarty version 3.1.30, created on 2016-12-01 04:16:54
  from "C:\xampp\htdocs\ntd2\templates\listausuarios.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583f96268fbf00_56912649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e90610218f99b3c6c43ea4ae2cc0d37eefdfb910' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ntd2\\templates\\listausuarios.tpl',
      1 => 1480562206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583f96268fbf00_56912649 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario', false, 'adminUsuarios');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['adminUsuarios']->value => $_smarty_tpl->tpl_vars['usuario']->value) {
?>
    <li>
      <?php echo $_smarty_tpl->tpl_vars['usuario']->value['email'];?>

      <?php echo $_smarty_tpl->tpl_vars['usuario']->value['privilegio'];?>

       <a class="updateUsuario" href="#" data-idusuario="<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id_usuario'];?>
"><span class="glyphicon glyphicon-pencil " aria-hidden="true"></span></a>

    </li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
<?php }
}
