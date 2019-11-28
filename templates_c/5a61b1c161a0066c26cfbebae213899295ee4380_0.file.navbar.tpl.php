<?php
/* Smarty version 3.1.33, created on 2018-11-22 20:31:14
  from 'C:\xampp\htdocs\web\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf70402102fd8_38885555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a61b1c161a0066c26cfbebae213899295ee4380' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\templates\\navbar.tpl',
      1 => 1542915072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf70402102fd8_38885555 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 px-5">
  <a class="navbar-brand mr-5 navlogo" href="home"><img src="img/lol-logo.png" alt="LoL Logo"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="ml-5 collapse navbar-collapse navbar-items" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="logout"><span class="text-danger">Logout</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="register"><span class="text-info">Register</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="home">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="dashboard">Dashboard</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="chars">Personajes</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="roles">Roles</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="items">Items</a>
      </li>
    </ul>
  </div>
</nav>
<?php }
}
