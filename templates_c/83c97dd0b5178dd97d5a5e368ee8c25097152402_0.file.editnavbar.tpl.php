<?php
/* Smarty version 3.1.33, created on 2018-10-18 21:59:24
  from 'C:\xampp\htdocs\web\templates\editnavbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc8e61c157365_90238407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83c97dd0b5178dd97d5a5e368ee8c25097152402' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\templates\\editnavbar.tpl',
      1 => 1539890408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc8e61c157365_90238407 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 px-5">
  <a class="navbar-brand mr-5 navlogo" href="../home"><img src="../img/lol-logo.png" alt="LoL Logo"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="ml-5 collapse navbar-collapse navbar-items" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../chars">Personajes</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../roles">Roles</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../items">Items</a>
      </li>
    </ul>
  </div>
</nav>
<?php }
}
