<?php
/* Smarty version 3.1.30, created on 2016-11-28 01:40:41
  from "C:\xampp\htdocs\ntd2\templates\adminCategoria.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583b7d09c249b8_61170610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c78bcfa9476fa81a0d4a3f83bf0efacdbdab73f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ntd2\\templates\\adminCategoria.tpl',
      1 => 1480293635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:listacategorias.tpl' => 1,
  ),
),false)) {
function content_583b7d09c249b8_61170610 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div >

  <span class="pull-right">Hola <strong><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</strong>! <a href="">Logout</a></span>
<h1>Lista Categorias</h1>

<hr>
<form id="formCategoria" action="guardar_categoria" method="post">
    <input type="text" name="categoria" required value="" placeholder="Ingrese la categoria">
    <input type="submit" name="Agregar" id="agregarCategoriaBtn">
</form>
<div id="listaCat">
  <?php $_smarty_tpl->_subTemplateRender("file:listacategorias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>

</div>
<?php }
}
