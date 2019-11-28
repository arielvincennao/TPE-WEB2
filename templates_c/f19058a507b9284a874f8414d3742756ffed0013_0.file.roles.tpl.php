<?php
/* Smarty version 3.1.33, created on 2018-10-19 00:54:35
  from 'C:\xampp\htdocs\web\templates\roles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc90f2b385735_63154345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f19058a507b9284a874f8414d3742756ffed0013' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\templates\\roles.tpl',
      1 => 1539903273,
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
function content_5bc90f2b385735_63154345 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <div class="row my-5">
    <div class="col-md-8 mx-auto">
      <h1 class="text-center">Lista de Roles</h1>
    </div>
  </div>
  <div class="row my-5">
    <div class="col-md-4 mx-auto">
      <ul class="list-group text-center">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Roles']->value, 'role');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
?>
        <li class="list-group-item bg-dark"> <a href="charsbyrole/<?php echo $_smarty_tpl->tpl_vars['role']->value['id_role'];?>
"><?php echo $_smarty_tpl->tpl_vars['role']->value['name'];?>
</a></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  </div>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
