<?php
/* Smarty version 3.1.30, created on 2016-11-28 22:06:01
  from "C:\xampp\htdocs\ntd2\templates\adminProductos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583c9c3934ad82_11026087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac027c0d779f4a65112b4708c3095fd533561e82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ntd2\\templates\\adminProductos.tpl',
      1 => 1480367157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:listaproductos.tpl' => 1,
  ),
),false)) {
function content_583c9c3934ad82_11026087 (Smarty_Internal_Template $_smarty_tpl) {
?>
<span class="pull-right">Hola <strong><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</strong>! <a href="">Logout</a></span>
<h1>Lista Productos</h1>

<hr>
<form id="formProducto" enctype="multipart/form-data" action="guardar_producto" method="post">
    <input type="text" id="prod"name="producto" required value="" placeholder="Ingrese el producto">
    <label class="control-label">Adjuntar Imagenes</label>
  <!--  <input type="file" name="imagenes[]" required value="" multiple > -->
    <input id="img" name="imagenes[]" type="file" class="file" multiple="true" data-show-upload="true" data-show-caption="true">
    <p>
      elige la categoria
    <select type="text" id="cat"name="categoria" required value="">
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
  </p>

    <input type="submit" name="Agregar" value="enviar">
</form>

<div id="listaProd">
  <?php $_smarty_tpl->_subTemplateRender("file:listaproductos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
 <!-- si saco esta linea no puede acceder al action -->
<?php }
}
