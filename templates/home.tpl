{include file="head.tpl"}
{include file="navbar.tpl"}
<div class="container">
  <div class="row mt-3">
  </div>
  <div class="row">
    <div class="col text-center mt-5">
      <h2 class="display-4">¡Bienvenido a League of Legends!</h2>
      <p><span class="lol-word">League of Legends</span> es un juego competitivo en línea de ritmo frenético, que fusiona la velocidad y la intensidad de la estrategia en tiempo real (ETR) con elementos de juegos de rol. Dos equipos de poderosos campeones, cada uno con un diseño y estilo de juegos únicos, compiten cara a cara a través de diversos campos de batalla y modos de juego. Con un plantel de campeones en constante expansión, actualizaciones frecuentes y un emocionante panorama competitivo, <span class="lol-word">League of Legends</span> ofrece posibilidades de juego ilimitadas a usuarios de todos los niveles de habilidad.</p>
    </div>
  </div>
  <div class="row mt-5">
    <form method="post" action="login" class="col-md-4 mx-auto text-center">
      <div class="form-group">
        <label for="userEmail">Email</label>
        <input type="email" class="form-control" name="userEmail" placeholder="Email">
      </div>
      <div class="form-group">
        <label for="userPassword">Contraseña</label>
        <input type="password" class="form-control" name="userPassword" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-sx">INGRESAR</button>
    </form>
  </div>
</div>
{include file="footer.tpl"}
