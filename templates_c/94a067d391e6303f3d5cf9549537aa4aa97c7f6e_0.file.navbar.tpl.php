<?php
/* Smarty version 3.1.33, created on 2019-11-27 22:16:58
  from 'C:\xampp\htdocs\TPE\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddee7ca3a6ec6_89937697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94a067d391e6303f3d5cf9549537aa4aa97c7f6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\navbar.tpl',
      1 => 1574889414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddee7ca3a6ec6_89937697 (Smarty_Internal_Template $_smarty_tpl) {
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
