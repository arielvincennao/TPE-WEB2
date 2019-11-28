{include file="head.tpl"}
{include file="navbar.tpl"}
<div class="container">
  <div class="row my-5">
    <div class="col-md-8 mx-auto">
      <h1 class="text-center">Detalles de: {$Role['name']}</h1>
    </div>
  </div>
  <div class="row my-5">
    <div class="col-md-4 mx-auto">
      <ul class="list-group text-center">
          <li class="list-group-item bg-dark">#{$Role['id_role']}</li>
          <li class="list-group-item bg-dark">{$Role['name']}</li>
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
        <input type="hidden" class="form-control" name="roleidForm" value="{$Role['id_role']}">
      </div>
      <div class="form-group">
        <label for="rolenameForm">Nombre</label>
        <input type="text" class="form-control" name="rolenameForm" placeholder="Nombre" value="{$Role['name']}">
      </div>
      <button type="submit" class="btn btn-primary btn-block my-5">Editar</button>
    </form>
  </div>
</div>
{include file="footer.tpl"}
