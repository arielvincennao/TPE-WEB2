{include file="head.tpl"}
{include file="navbar.tpl"}
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
                  {foreach $Chars as $char}
                  <tr>
                    <th scope="row">{$char['id_char']}</th>
                    <td>{$char['name']}</td>
                    <td>{$char['description']}</td>
                    {foreach $char['role'] as $role}
                      <td>{$role['name']}</td>
                    {/foreach}
                    <td><a href="editchar/{$char['id_char']}" class="btn btn-warning btn-sm">Editar</a><a href="deletechar/{$char['id_char']}" class="btn btn-danger btn-sm">Borrar</a></td>
                  </tr>
                  {/foreach}
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
                {foreach from=$Roles item=role}
                <option value="{$role['id_role']}">{$role['name']}</option>
                {/foreach}
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
                {foreach $Roles as $role}
                <li class="list-group-item bg-dark"> <a href="charsbyrole/{$role['id_role']}">{$role['name']}</a> <span class="float-right"><a href="editrole/{$role['id_role']}" class="btn btn-warning btn-sm">Editar</a><a href="deleterole/{$role['id_role']}" class="btn btn-danger btn-sm">Borrar</a></span></li>
                {/foreach}
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
                  {foreach from=$Users item=user}
                  <tr>
                    <th scope="row">{$user['id']}</th>
                    <td>{$user['email']}</td>
                    <td>{$user['clearance']}</td>
                    <td><a href="adminuser/{$user['id']}" class="btn btn-success btn-sm">Dar</a><a href="regularuser/{$user['id']}" class="btn btn-danger btn-sm">Quitar</a></td>
                    <td><a href="deleteuser/{$user['id']}" class="btn btn-danger btn-sm">Borrar</a></td>
                  </tr>
                  {/foreach}
                </tbody>
              </table>
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>


</div>
{include file="footer.tpl"}
