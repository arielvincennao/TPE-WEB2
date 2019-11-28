{include file="head.tpl"}
{include file="navbar.tpl"}
<div class="container">
  <div class="row my-5">
    <div class="col-md-8 mx-auto">
      <h1 class="text-center">Detalles de: {$Char[0]['name']}</h1>
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
            <th scope="row">{$Char[0]['id_char']}</th>
            <td>{$Char[0]['name']}</td>
            <td>{$Char[0]['description']}</td>
            <td>{$Char[1]['name']}</td>
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
        <input type="hidden" class="form-control" name="charidForm" value="{$Char[0]['id_char']}">
      </div>
      <div class="form-group">
        <label for="charnameForm">Nombre</label>
        <input type="text" class="form-control" name="charnameForm" placeholder="Nombre" value="{$Char[0]['name']}">
      </div>
      <div class="form-group">
        <label for="chardescriptionForm">Campeón favorito</label>
        <input type="text" class="form-control" name="chardescriptionForm" placeholder="Campeón favorito" value="{$Char[0]['description']}">
      </div>
      <div class="form-group">
        <label for="charroleForm">Rol</label>
        <select class="form-control" name="charroleForm">
          {foreach from=$Roles item=role}
          <option value="{$role['id_role']}" {($role["id_role"] == $Char[0]["id_role"]) ? "selected" : ""}>{$role['name']}</option>
          {/foreach}
        </select>
      </div>
      <button type="submit" class="btn btn-primary btn-block my-5">Editar</button>
    </form>
  </div>
</div>
{include file="footer.tpl"}
