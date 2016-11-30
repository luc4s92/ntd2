<?php
/* Smarty version 3.1.30, created on 2016-11-27 01:35:51
  from "C:\xampp\htdocs\ntd2\templates\listacategorias.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583a2a67df96e5_02554898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5340bf314a8e5b3fabe75bf2034f3d375d93f0e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ntd2\\templates\\listacategorias.tpl',
      1 => 1479168747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583a2a67df96e5_02554898 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria', false, 'adminCategoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['adminCategoria']->value => $_smarty_tpl->tpl_vars['categoria']->value) {
?>
    <li>
      <?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>

       <a class="updateCat" href="#" data-idcategoria="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
"><span class="glyphicon glyphicon-pencil " aria-hidden="true"></span></a>
       <a class="eliminarCategoria" href="#" data-idcategoria="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
"><span class="glyphicon glyphicon-remove-sign " aria-hidden="true"></span></a>

    </li>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul>
 <!--mismo problema que en el adminCat.tpl si saco ese link solo me deja borrar 1 y tengo que recargar la pagina -->
<?php }
}
