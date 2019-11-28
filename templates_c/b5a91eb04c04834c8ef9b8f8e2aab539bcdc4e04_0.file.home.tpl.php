<?php
/* Smarty version 3.1.33, created on 2018-11-22 18:51:49
  from 'C:\xampp\htdocs\web\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf6ecb536ce73_67354390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5a91eb04c04834c8ef9b8f8e2aab539bcdc4e04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\templates\\home.tpl',
      1 => 1542909079,
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
function content_5bf6ecb536ce73_67354390 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <div class="row mt-3">
    <div class="col text-center logo">
      <img src="img/lol-logo.png" alt="LoL Logo">
    </div>
  </div>
  <div class="row">
    <div class="col text-center">
      <h2 class="display-4">Bienvenido a nuestra wiki de LoL!</h2>
      <p class="lead">En nuestra web podrás encontrar una lista completa de los campeones e items del juego. <br> Loguea para poder editar y agregar contenido por tu cuenta!</p>
    </div>
  </div>
  <div class="row">
    <form method="post" action="login" class="col-md-4 mx-auto text-center">
      <div class="form-group">
        <label for="userEmail">Email</label>
        <input type="email" class="form-control" name="userEmail" placeholder="email">
      </div>
      <div class="form-group">
        <label for="userPassword">Contraseña</label>
        <input type="password" class="form-control" name="userPassword" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-sx text-white">Ingresar</button>
    </form>
  </div>
  <div class="row my-5">
    <div class="col-md-3 text-center mx-auto my-1">
      <a href="chars" class="btn-sx btn-block">Personajes</a>
    </div>
    <div class="col-md-3 text-center mx-auto my-1">
      <a href="roles" class="btn-sx btn-block">Roles</a>
    </div>
    <div class="col-md-3 text-center mx-auto my-1">
      <a href="items" class="btn-sx btn-block">Items</a>
    </div>
  </div>
  <div class="row my-5 translucid pb-5 px-5">
    <div class="col">
      <h2 class="text-center my-5">¿Qué es League of Legends?</h2>
      <div class="text-justify">
        <p>League of Legends (también conocido por sus siglas LoL) es un videojuego de género multiplayer online battle arena (MOBA) y deporte electrónico desarrollado por Riot Games para Microsoft Windows y OS X. En un principio los servidores estaban alojados en la empresa GOA y fue vendida a la empresa china Tencent Holdings Limited.</p>
        <p>El juego fue diseñado para el sistema operativo Microsoft Windows y lanzaron una beta para OS X dejando al poco tiempo el proyecto de lado. Esta beta ha sido mejorada por parte de usuarios del juego, haciendo posible jugar a una versión actualizada de League of Legends.</p>
        <p>En octubre de 2012, contaba con 70 millones de jugadores registrados.​ Para marzo de 2013 se registró un pico de 5 millones de jugadores conectados al mismo tiempo en todo el mundo. Es un juego de alta competitividad siendo uno de los juegos más populares de los deportes electrónicos (e-sports).</p>
        <p>El juego está inspirado en el popular mapa personalizado del Warcraft III, Defense of the Ancients: Allstars diseñado por Steve «Guinsoo» Feak el cual a su vez está basado en el escenario de StarCraft «Aeon of Strife».</p>
      </div>
    </div>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
