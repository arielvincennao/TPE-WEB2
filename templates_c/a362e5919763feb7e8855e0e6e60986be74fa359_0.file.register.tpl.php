<?php
/* Smarty version 3.1.33, created on 2019-11-28 21:02:16
  from 'C:\xampp\htdocs\TPE-WEB2\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de027c8a8b062_77963606',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a362e5919763feb7e8855e0e6e60986be74fa359' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\register.tpl',
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
function content_5de027c8a8b062_77963606 (Smarty_Internal_Template $_smarty_tpl) {
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
