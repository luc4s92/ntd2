<?php
/* Smarty version 3.1.30, created on 2016-12-01 00:17:44
  from "C:\xampp\htdocs\ntd2\templates\producto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583f5e1890c9b5_79246447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3cd972b9d0667600560aaed4956e8724b5260f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ntd2\\templates\\producto.tpl',
      1 => 1480547842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583f5e1890c9b5_79246447 (Smarty_Internal_Template $_smarty_tpl) {
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
<button class="refresh" data-idproducto="<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
" type="button" class="btn btn-default btn-xs pull-right" aria-label="Refresh">
                <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
</button>

<button class="StopTemporizador"  type="button" class="btn btn-default btn-xs pull-right" aria-label="Stop">
                <span class="glyphicon glyphicon-stop" aria-hidden="true"></span>
</button>

<hr>
<div class="listaComent">

</div>
<hr>
<?php }
}
