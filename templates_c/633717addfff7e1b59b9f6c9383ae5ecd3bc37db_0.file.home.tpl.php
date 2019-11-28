<?php
/* Smarty version 3.1.33, created on 2019-11-27 20:54:50
  from 'C:\xampp\htdocs\TPE\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dded48a220527_88333010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '633717addfff7e1b59b9f6c9383ae5ecd3bc37db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\home.tpl',
      1 => 1574884489,
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
function content_5dded48a220527_88333010 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
