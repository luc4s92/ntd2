<?php
/* Smarty version 3.1.30, created on 2016-12-01 03:04:04
  from "C:\xampp\htdocs\ntd2\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583f85143cacb6_08228799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60532d55dd94207ec7c432a59647866c6cbbccba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ntd2\\templates\\login.tpl',
      1 => 1480557839,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583f85143cacb6_08228799 (Smarty_Internal_Template $_smarty_tpl) {
?>


      <form id="formLogin" class="form-signin" method="POST" action="login">
        <h2 class="form-signin-heading">Acceso</h2>
        <label for="txtEmail" class="sr-only">Email</label>
        <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email" required autofocus>
        <label for="txtPassword" class="sr-only">Password</label>
        <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Password" required>
        <?php if (count($_smarty_tpl->tpl_vars['errores']->value) > 0) {?>
          <div class="alert alert-danger" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Error:</span>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errores']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
              <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </div>
        <?php }?>
        <button id="LoginBtn" class="btn btn-lg btn-primary btn-block" type="submit">Acceder</button>
            <a href="#" id=register >Registrarse </a>
      </form>
<?php }
}
