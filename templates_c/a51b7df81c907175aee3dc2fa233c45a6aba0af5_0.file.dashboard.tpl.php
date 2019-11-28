<?php
/* Smarty version 3.1.33, created on 2019-11-28 21:11:33
  from 'C:\xampp\htdocs\TPE-WEB2\templates\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de029f58dbf68_88934898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a51b7df81c907175aee3dc2fa233c45a6aba0af5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\dashboard.tpl',
      1 => 1574971892,
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
function content_5de029f58dbf68_88934898 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-fluid">
  <div class="row">
    <div class="col-3 dashboardpills">
      <div class="nav flex-column text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="btn btn-sx" id="v-pills-chars-tab" data-toggle="pill" href="#v-pills-chars" role="tab" aria-controls="v-pills-chars" aria-selected="true">USUARIOS</a>
        <a class="btn btn-sx" id="v-pills-roles-tab" data-toggle="pill" href="#v-pills-roles" role="tab" aria-controls="v-pills-roles" aria-selected="false">ROLES</a>
        <a class="btn btn-sx" id="v-pills-users-tab" data-toggle="pill" href="#v-pills-users" role="tab" aria-controls="v-pills-users" aria-selected="false">EDITAR PERMISOS</a>
        <a class="btn btn-sx mt-5" href="logout">SALIR</a>
      </div>
    </div>
    <div class="col-9">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-chars" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <div class="row my-5">
            <div class="col-md-8 mx-auto">
              <h1 class="text-center">Lista de usuarios</h1>
            </div>
          </div>
          <div class="row my-5">
            <div class="col">
              <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Chars']->value, 'char');
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
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['char']->value['role'], 'role');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
?>
                      <td><?php echo $_smarty_tpl->tpl_vars['role']->value['name'];?>
</td>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <td><a href="editchar/<?php echo $_smarty_tpl->tpl_vars['char']->value['id_char'];?>
" class="btn btn-warning btn-sm">Editar</a><a href="deletechar/<?php echo $_smarty_tpl->tpl_vars['char']->value['id_char'];?>
" class="btn btn-danger btn-sm">Borrar</a></td>
                  </tr>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row my-5">
            <div class="col-md-8 mx-auto">
              <h1 class="text-center">Agregar usuario</h1>
            </div>
          </div>
          <div class="row my-5">
            <form method="post" action="insertchar" class="col-md-8 mx-auto">
            <div class="form-group">
              <label for="nameForm">Nombre</label>
              <input type="text" class="form-control" name="nameForm" placeholder="Nombre">
            </div>
            <div class="form-group">
              <label for="descriptionForm">Campeón favorito</label>
              <input type="text" class="form-control" name="descriptionForm" placeholder="Campeón favorito">
            </div>
            <div class="form-group">
              <label for="roleForm">Rol</label>
              <select class="form-control" name="roleForm">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Roles']->value, 'role');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['role']->value['id_role'];?>
"><?php echo $_smarty_tpl->tpl_vars['role']->value['name'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block my-5">Agregar</button>
          </form>
          </div>
        </div>



        <div class="tab-pane fade" id="v-pills-roles" role="tabpanel" aria-labelledby="v-pills-roles-tab">
          <div class="row my-5">
            <div class="col-md-8 mx-auto">
              <h1 class="text-center">Lista de Roles</h1>
            </div>
          </div>
          <div class="row my-5">
            <div class="col-md-4 mx-auto">
              <ul class="list-group">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Roles']->value, 'role');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
?>
                <li class="list-group-item bg-dark"> <a href="charsbyrole/<?php echo $_smarty_tpl->tpl_vars['role']->value['id_role'];?>
"><?php echo $_smarty_tpl->tpl_vars['role']->value['name'];?>
</a> <span class="float-right"><a href="editrole/<?php echo $_smarty_tpl->tpl_vars['role']->value['id_role'];?>
" class="btn btn-warning btn-sm">Editar</a><a href="deleterole/<?php echo $_smarty_tpl->tpl_vars['role']->value['id_role'];?>
" class="btn btn-danger btn-sm">Borrar</a></span></li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 mx-auto">
              <h1 class="text-center">Agregar Rol</h1>
            </div>
          </div>
          <div class="row my-5">
            <form method="post" action="insertrole" class="col-md-6 mx-auto">
            <div class="form-group">
              <label for="newroleForm">Rol</label>
              <input type="text" class="form-control" name="newroleForm" placeholder="Nombre del rol">
            </div>
            <button type="submit" class="btn btn-primary btn-block my-5">Agregar</button>
          </form>
          </div>
        </div>

        <div class="tab-pane fade" id="v-pills-users" role="tabpanel" aria-labelledby="v-pills-users-tab">
          <div class="row my-5">
            <div class="col-md-8 mx-auto">
              <h1 class="text-center">Lista de Usuarios</h1>
            </div>
          </div>
          <div class="row my-5">
            <div class="col">
              <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Acceso</th>
                    <th scope="col">Admin</th>
                    <th scope="col">Acción</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                  <tr>
                    <th scope="row"><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</th>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['clearance'];?>
</td>
                    <td><a href="adminuser/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" class="btn btn-success btn-sm">Dar</a><a href="regularuser/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" class="btn btn-danger btn-sm">Quitar</a></td>
                    <td><a href="deleteuser/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" class="btn btn-danger btn-sm">Borrar</a></td>
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



      </div>
    </div>
  </div>


</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
