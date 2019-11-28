<?php
/* Smarty version 3.1.33, created on 2019-11-28 21:22:07
  from 'C:\xampp\htdocs\TPE-WEB2\templates\editrole.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de02c6f977510_35287510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e322a64de193bb01ba5ef58972122fe0b73cc7ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\editrole.tpl',
      1 => 1543097645,
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
function content_5de02c6f977510_35287510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <div class="row my-5">
    <div class="col-md-8 mx-auto">
      <h1 class="text-center">Detalles de: <?php echo $_smarty_tpl->tpl_vars['Role']->value['name'];?>
</h1>
    </div>
  </div>
  <div class="row my-5">
    <div class="col-md-4 mx-auto">
      <ul class="list-group text-center">
          <li class="list-group-item bg-dark">#<?php echo $_smarty_tpl->tpl_vars['Role']->value['id_role'];?>
</li>
          <li class="list-group-item bg-dark"><?php echo $_smarty_tpl->tpl_vars['Role']->value['name'];?>
</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <h1 class="text-center">Editar Rol</h1>
    </div>
  </div>
  <div class="row my-5">
    <form method="post" action="saverole" class="col-md-6 mx-auto">
      <div class="form-group">
        <input type="hidden" class="form-control" name="roleidForm" value="<?php echo $_smarty_tpl->tpl_vars['Role']->value['id_role'];?>
">
      </div>
      <div class="form-group">
        <label for="rolenameForm">Nombre</label>
        <input type="text" class="form-control" name="rolenameForm" placeholder="Nombre" value="<?php echo $_smarty_tpl->tpl_vars['Role']->value['name'];?>
">
      </div>
      <button type="submit" class="btn btn-primary btn-block my-5">Editar</button>
    </form>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
