<?php
/* Smarty version 3.1.33, created on 2019-11-27 22:26:00
  from 'C:\xampp\htdocs\TPE\templates\roles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddee9e80ca119_09701075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ec04e68ef7bcedc7705d78097c1b5760b4287a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\roles.tpl',
      1 => 1574889947,
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
function content_5ddee9e80ca119_09701075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <div class="row my-5">
    <div class="col-md-8 mx-auto">
      <h1 class="text-center">Listado de roles</h1>
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
