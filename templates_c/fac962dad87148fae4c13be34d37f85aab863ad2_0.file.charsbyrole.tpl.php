<?php
/* Smarty version 3.1.33, created on 2019-11-27 22:20:43
  from 'C:\xampp\htdocs\TPE\templates\charsbyrole.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddee8ab2f2639_08826081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fac962dad87148fae4c13be34d37f85aab863ad2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\charsbyrole.tpl',
      1 => 1574889503,
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
function content_5ddee8ab2f2639_08826081 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <div class="row my-5">
    <div class="col-md-8 mx-auto">
      <h1 class="text-center">Liga: <?php echo $_smarty_tpl->tpl_vars['Chars']->value[1]['name'];?>
</h1>
    </div>

  </div>
  <div class="row my-5">
    <div class="col-md-4 mx-auto text-center">
      <form class="" action="filter" method="post">
        <label for="roleSelect">Filtrar por rol</label>
        <select class="form-control" name="roleSelect">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Roles']->value, 'Role');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Role']->value) {
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['Role']->value['id_role'];?>
" <?php echo $_smarty_tpl->tpl_vars['Chars']->value[1]['id_role'] == $_smarty_tpl->tpl_vars['Role']->value['id_role'] ? "selected" : '';?>
><?php echo $_smarty_tpl->tpl_vars['Role']->value['name'];?>
</option>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <button type="submit" name="button" class="btn btn-info btn-lg mt-3">Filtrar</button>
      </form>
    </div>
  </div>
  <div class="row my-5">
    <div class="col">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nickname</th>
            <th scope="col">Campeón favorito</th>
            <th scope="col">Rol</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Chars']->value[0], 'char');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['char']->value) {
?>
          <tr>
            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['char']->value['id_char'];?>
</th>
            <td><?php echo $_smarty_tpl->tpl_vars['char']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['char']->value['description'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['Chars']->value[1]['name'];?>
</td>
            <td><a href="detail/<?php echo $_smarty_tpl->tpl_vars['char']->value['id_char'];?>
" class="btn btn-warning btn-sm">Ver detalles</a></td>
          </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table>
    </div>
  </div>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
