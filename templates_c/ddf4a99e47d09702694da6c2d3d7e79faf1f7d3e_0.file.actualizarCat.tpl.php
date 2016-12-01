<?php
/* Smarty version 3.1.30, created on 2016-12-01 02:19:41
  from "C:\xampp\htdocs\ntd2\templates\actualizarCat.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583f7aad29e084_76202750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddf4a99e47d09702694da6c2d3d7e79faf1f7d3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ntd2\\templates\\actualizarCat.tpl',
      1 => 1479168748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583f7aad29e084_76202750 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form   method="post">
    <input type="text" name="categoria"  id="nuevacat" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
" >
    <input type="submit" name="Actualizar" data-idcategoria="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
" id="ActualizarCategoriaBtn">
</form>
<?php }
}
