<?php
/* Smarty version 3.1.33, created on 2018-11-16 23:27:52
  from 'C:\xampp\htdocs\web\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bef4468b0c423_31826727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a248ff383e6b7e2afe0d7fbc7a860b0ed35370df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\templates\\register.tpl',
      1 => 1542407107,
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
function content_5bef4468b0c423_31826727 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <div class="row mt-3">
    <div class="col text-center logo">
      <img src="img/lol-logo.png" alt="LoL Logo">
    </div>
  </div>
  <div class="row">
    <div class="col text-center">
      <h2 class="display-4">Bienvenido a nuestra wiki de LoL!</h2>
      <p class="lead">Registrarse con mail y contraseña</p>
    </div>
  </div>
  <div class="row">
    <form method="post" action="signup" class="col-md-4 mx-auto text-center">
      <div class="form-group">
        <label for="userEmail">Email</label>
        <input type="email" class="form-control" name="userEmail" placeholder="email">
      </div>
      <div class="form-group">
        <label for="userPassword">Contraseña</label>
        <input type="password" class="form-control" name="userPassword" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-sx text-white">Registrarse e ingresar</button>
    </form>
  </div>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
