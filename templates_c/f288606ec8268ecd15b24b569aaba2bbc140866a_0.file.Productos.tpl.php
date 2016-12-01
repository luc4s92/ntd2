<?php
/* Smarty version 3.1.30, created on 2016-12-01 01:53:00
  from "C:\xampp\htdocs\ntd2\templates\Productos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583f746c8fdc88_97082428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f288606ec8268ecd15b24b569aaba2bbc140866a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ntd2\\templates\\Productos.tpl',
      1 => 1480553573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583f746c8fdc88_97082428 (Smarty_Internal_Template $_smarty_tpl) {
?>

<h1> Lista de Productos </h1>

<div id="listaProdCat">
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

</div>
<hr>

<form id="formFiltro" enctype="multipart/form-data" action="productos_categoria" method="get">

    <select name="id_categoria" required value="">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
      <option   value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
 </option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </select>
    <input class="btn btn-success" type="submit" name="listar" value="Listar">


</form>

<hr>
<form id="formComentario"  enctype="multipart/form-data" action="agregar_comentario"  method="post">
<textarea class="form-control" rows="3" name="comentario" ></textarea>
<select type="text" id="cat"name="id_producto" required value="">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
  <option   value="<?php echo $_smarty_tpl->tpl_vars['producto']->value['id_producto'];?>
"><?php echo $_smarty_tpl->tpl_vars['producto']->value['nombre'];?>
 </option>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</select>
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
