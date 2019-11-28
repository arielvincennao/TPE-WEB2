{include file="head.tpl"}
{include file="navbar.tpl"}
<div class="container">
  <div class="row mt-5">
    <div class="col text-center">
      <h2 class="display-4">Bienvenido</h2>
      <p class="lead">Registrarse con email y contraseña</p>
    </div>
  </div>
  <div class="row">
    <form method="post" action="signup" class="col-md-4 mx-auto text-center">
      <div class="form-group">
        <label for="userEmail">Email</label>
        <input type="email" class="form-control" name="userEmail" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="userPassword">Contraseña</label>
        <input type="password" class="form-control" name="userPassword" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-sx">REGISTRARSE E INGRESAR</button>
    </form>
  </div>

</div>
{include file="footer.tpl"}
