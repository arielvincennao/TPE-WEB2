<?php
/* Smarty version 3.1.33, created on 2018-10-20 15:54:56
  from 'C:\xampp\htdocs\web\templates\edititem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bcb33b081c042_67219037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cbd3deb929d8ae9d42b06f5350e02d4d52828cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\templates\\edititem.tpl',
      1 => 1540043445,
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
function content_5bcb33b081c042_67219037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <div class="row my-5">
    <div class="col-md-8 mx-auto">
      <h1 class="text-center">Detalles de: <?php echo $_smarty_tpl->tpl_vars['Item']->value['name'];?>
</h1>
    </div>
  </div>
  <div class="row my-5">
    <div class="col-md-6 mx-auto">
      <ul class="list-group text-center">
          <li class="list-group-item bg-dark">#<?php echo $_smarty_tpl->tpl_vars['Item']->value['id'];?>
</li>
          <li class="list-group-item bg-dark"><?php echo $_smarty_tpl->tpl_vars['Item']->value['name'];?>
</li>
          <li class="list-group-item bg-dark">$<?php echo $_smarty_tpl->tpl_vars['Item']->value['price'];?>
</li>
          <li class="list-group-item bg-dark"><?php echo $_smarty_tpl->tpl_vars['Item']->value['description'];?>
</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h1 class="text-center">Editar Item</h1>
    </div>
  </div>
  <div class="row my-5">
    <form method="post" action="saveitem" class="col-md-8 mx-auto">
      <div class="form-group">
        <input type="hidden" class="form-control" name="itemidForm" value="<?php echo $_smarty_tpl->tpl_vars['Item']->value['id'];?>
">
      </div>
      <div class="form-group">
        <label for="itemnameForm">Nombre</label>
        <input type="text" class="form-control" name="itemnameForm" placeholder="Nombre" value="<?php echo $_smarty_tpl->tpl_vars['Item']->value['name'];?>
">
      </div>
      <div class="form-group">
        <label for="itempriceForm">Precio</label>
        <input type="text" class="form-control" name="itempriceForm" placeholder="Precio" value="<?php echo $_smarty_tpl->tpl_vars['Item']->value['price'];?>
">
      </div>
      <div class="form-group">
        <label for="itemdescriptionForm">Descripción</label>
        <input type="text" class="form-control" name="itemdescriptionForm" placeholder="Descripción" value="<?php echo $_smarty_tpl->tpl_vars['Item']->value['description'];?>
">
      </div>
      <button type="submit" class="btn btn-primary btn-block my-5">Editar</button>
    </form>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
