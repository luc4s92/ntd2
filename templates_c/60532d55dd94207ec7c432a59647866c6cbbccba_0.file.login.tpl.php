<?php
/* Smarty version 3.1.30, created on 2016-11-27 01:35:48
  from "C:\xampp\htdocs\ntd2\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_583a2a64e08631_19213568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60532d55dd94207ec7c432a59647866c6cbbccba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ntd2\\templates\\login.tpl',
      1 => 1480203526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_583a2a64e08631_19213568 (Smarty_Internal_Template $_smarty_tpl) {
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
      </form>
    
<?php }
}
