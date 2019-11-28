<?php
/* Smarty version 3.1.33, created on 2018-10-20 15:54:43
  from 'C:\xampp\htdocs\web\templates\editchar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bcb33a3a6dcb2_11350633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04f9ebad4ca7284834fd94cefd59b1a75ccca396' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\templates\\editchar.tpl',
      1 => 1540043436,
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
function content_5bcb33a3a6dcb2_11350633 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <div class="row my-5">
    <div class="col-md-8 mx-auto">
      <h1 class="text-center">Detalles de: <?php echo $_smarty_tpl->tpl_vars['Char']->value[0]['name'];?>
</h1>
    </div>
  </div>
  <div class="row my-5">
    <div class="col-md-6 mx-auto">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Rol</th>
          </tr>
        </thead>
        <tbody>
          <tr class="py-auto">
            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['Char']->value[0]['id'];?>
</th>
            <td><?php echo $_smarty_tpl->tpl_vars['Char']->value[0]['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['Char']->value[0]['description'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['Char']->value[1]['name'];?>
</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="row my-5">
    <div class="col-md-8 mx-auto">
      <h1 class="text-center">Editar personaje</h1>
    </div>
  </div>
  <div class="row my-5">
    <form method="post" action="savechar" class="col-md-8 mx-auto">
      <div class="form-group">
        <input type="hidden" class="form-control" name="charidForm" value="<?php echo $_smarty_tpl->tpl_vars['Char']->value[0]['id'];?>
">
      </div>
      <div class="form-group">
        <label for="charnameForm">Nombre</label>
        <input type="text" class="form-control" name="charnameForm" placeholder="Nombre" value="<?php echo $_smarty_tpl->tpl_vars['Char']->value[0]['name'];?>
">
      </div>
      <div class="form-group">
        <label for="chardescriptionForm">Descripción</label>
        <input type="text" class="form-control" name="chardescriptionForm" placeholder="Descripción" value="<?php echo $_smarty_tpl->tpl_vars['Char']->value[0]['description'];?>
">
      </div>
      <div class="form-group">
        <label for="charroleForm">Rol</label>
        <select class="form-control" name="charroleForm">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Roles']->value, 'role');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['role']->value['id_role'];?>
" <?php echo $_smarty_tpl->tpl_vars['role']->value["id_role"] == $_smarty_tpl->tpl_vars['Char']->value[0]["id_role"] ? "selected" : '';?>
><?php echo $_smarty_tpl->tpl_vars['role']->value['name'];?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      </div>
      <button type="submit" class="btn btn-primary btn-block my-5">Editar</button>
    </form>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
