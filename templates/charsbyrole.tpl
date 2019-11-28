{include file="head.tpl"}
{include file="navbar.tpl"}
<div class="container">
  <div class="row my-5">
    <div class="col-md-8 mx-auto">
      <h1 class="text-center">Liga: {$Chars[1]['name']}</h1>
    </div>

  </div>
  <div class="row my-5">
    <div class="col-md-4 mx-auto text-center">
      <form class="" action="filter" method="post">
        <label for="roleSelect">Filtrar por rol</label>
        <select class="form-control" name="roleSelect">
          {foreach $Roles as $Role}
          <option value="{$Role['id_role']}" {($Chars[1]['id_role'] == $Role['id_role']) ? "selected" : ""}>{$Role['name']}</option>
          {/foreach}
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
          {foreach $Chars[0] as $char}
          <tr>
            <th scope="row">{$char['id_char']}</th>
            <td>{$char['name']}</td>
            <td>{$char['description']}</td>
            <td>{$Chars[1]['name']}</td>
            <td><a href="detail/{$char['id_char']}" class="btn btn-warning btn-sm">Ver detalles</a></td>
          </tr>
          {/foreach}
        </tbody>
      </table>
    </div>
  </div>

</div>
{include file="footer.tpl"}
