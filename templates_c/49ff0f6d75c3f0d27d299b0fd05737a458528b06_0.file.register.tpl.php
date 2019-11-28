<?php
/* Smarty version 3.1.33, created on 2019-11-27 21:26:09
  from 'C:\xampp\htdocs\TPE\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddedbe11af322_38435840',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49ff0f6d75c3f0d27d299b0fd05737a458528b06' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\register.tpl',
      1 => 1574886368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ddedbe11af322_38435840 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <div class="row mt-5">
    <div class="col text-center">
      <h2 class="display-4">Bienvenido</h2>
      <p class="lead">Registrarse con email y contraseña</p>
    </div>
  </div>
  <div class="row">
    <form method="post" action="signup" class="col-md-4 mx-auto text-center">
      <div class="form-group">
        <label for="userEmail">Email</label>
        <input type="email" class="form-control" name="userEmail" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="userPassword">Contraseña</label>
        <input type="password" class="form-control" name="userPassword" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-sx">REGISTRARSE E INGRESAR</button>
    </form>
  </div>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
