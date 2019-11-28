{include file="head.tpl"}
{include file="navbar.tpl"}
<div class="container">
  <div class="row my-5">
    <div class="col-md-8 mx-auto">
      <h1 class="text-center">Listado de roles</h1>
    </div>
  </div>
  <div class="row my-5">
    <div class="col-md-4 mx-auto">
      <ul class="list-group text-center">
        {foreach $Roles as $role}
        <li class="list-group-item bg-dark"> <a href="charsbyrole/{$role['id_role']}">{$role['name']}</a></li>
        {/foreach}
      </ul>
    </div>
  </div>

</div>
{include file="footer.tpl"}
