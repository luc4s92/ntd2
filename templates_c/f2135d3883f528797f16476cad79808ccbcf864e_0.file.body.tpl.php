<?php
/* Smarty version 3.1.30, created on 2016-11-29 22:21:18
  from "C:\xampp\htdocs\ntd2\templates\body.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583df14ecac428_84416962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2135d3883f528797f16476cad79808ccbcf864e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ntd2\\templates\\body.tpl',
      1 => 1480454474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home.tpl' => 1,
  ),
),false)) {
function content_583df14ecac428_84416962 (Smarty_Internal_Template $_smarty_tpl) {
?>
<body>

	<nav class="navbar navbar-inverse ">
  		<div class="container-fluid letraprincipal " >
		    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header ">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand " href="">No Te Detengas!</a>
				    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						      <ul class="nav navbar-nav navbar-right">
							        <li><a   id="Productos" href="#" >Productos</a></li>
											<li><a  id="mostrarContactoBtn" href="#">Contacto</a></li>
											<li><a  id="login" href="#">Login</a></li>
											<li class="dropdown">
													<a class="dropdown-toggle active" data-toggle="dropdown" href="#"> Administracion <span class="caret"></span></a>
													<ul class="dropdown-menu">
													<li><a  id="adminProductoBtn" href="#"> Admin Productos </a></li>
													<li role="presentation" class="divider"></li>
													<li><a  id="adminCategoriaBtn" href="#"> Admin Categoria </a></li>
													<li><a  id="adminBtn" href="#"> Admin  </a></li>
													</ul>
											</li>
								 </ul>
			    	</div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="conteiner">
	<section class="info row">
		<article class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
			<div id="cargarContenido" class="col-md-offset-3">
						<?php $_smarty_tpl->_subTemplateRender("file:home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <!-- moverlo a un tpl -->
			</div>
		</article>
	</section>
</div>
<?php }
}
