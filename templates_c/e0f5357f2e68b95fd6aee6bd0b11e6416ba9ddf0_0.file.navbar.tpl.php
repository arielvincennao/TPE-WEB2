<?php
/* Smarty version 3.1.33, created on 2019-11-28 01:52:11
  from 'C:\xampp\htdocs\TPE-WEB2\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddf1a3b676ce8_80186847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0f5357f2e68b95fd6aee6bd0b11e6416ba9ddf0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\navbar.tpl',
      1 => 1574889414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddf1a3b676ce8_80186847 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-dark py-3 px-5">
  <a class="navbar-brand mr-5 navlogo" href="home"><img src="img/lol-logo.png" alt="LoL Logo"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="ml-5 collapse navbar-collapse navbar-items" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
        <a class="nav-link" href="register"><span class="text-info">REGISTRO</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout"><span class="text-danger">CERRAR SESIÓN</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="dashboard">PANEL</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="usuarios">USUARIOS</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="roles">ROLES</a>
      </li>
    </ul>
  </div>
</nav>
<?php }
}
