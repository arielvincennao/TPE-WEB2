<?php
/* Smarty version 3.1.33, created on 2018-11-22 19:44:52
  from 'C:\xampp\htdocs\web\templates\guestdetailschar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf6f924367ab1_25273947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29fc67c1df9c22328ea5124ddbce32f528ae20a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\templates\\guestdetailschar.tpl',
      1 => 1542912287,
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
function content_5bf6f924367ab1_25273947 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <div class="row my-5">
    <div class="col-md-8 mx-auto">
      <h1 class="text-center">Detalles de: <?php echo $_smarty_tpl->tpl_vars['Char']->value[0]['name'];?>
</h1>
    </div>
  </div>
  <input type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
 id="userStatus">
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
            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['Char']->value[0]['id_char'];?>
</th>
            <td><?php echo $_smarty_tpl->tpl_vars['Char']->value[0]['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['Char']->value[0]['description'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['Char']->value[1]['name'];?>
</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h1 class="text-center">Comentarios sobre <?php echo $_smarty_tpl->tpl_vars['Char']->value[0]['name'];?>
</h1>
    </div>
  </div>
  <div class="row">
    <form class="col-md-4 mx-auto text-center">
      <select class="form-control" name="order" id="order">
        <option value="ASC">Ascendente</option>
        <option value="DESC">Descendiente</option>
      </select>
      <button type="submit" class="btn btn-primary btn-block my-5" id="filterOrder">Filtrar</button>
    </form>
  </div>
  <div class="row">
    <div class="col-md-6 mx-auto" id="comments">

    </div>
  </div>
  <div class="row my-5 d-none">
    <form class="col-md-6 mx-auto" id="commentForm" method="post">
      <label for="rating" class="text-center">Puntaje</label>
      <select class="form-control" name="rating" id="ratingForm">
        <option value="1">&#9733;</option>
        <option value="2">&#9733; &#9733;</option>
        <option value="3">&#9733; &#9733; &#9733;</option>
        <option value="4">&#9733; &#9733; &#9733; &#9733;</option>
        <option value="5">&#9733; &#9733; &#9733; &#9733; &#9733;</option>
      </select>
      <div class="form-group">
        <label for="content">Mensaje</label>
        <textarea rows="4" cols="80" class="form-control" name="content" placeholder="Mensaje" style="resize: none;" id="contentForm"></textarea>
      </div>
      <div class="form-group">
        <input type="hidden" class="form-control" name="id_char" value="<?php echo $_smarty_tpl->tpl_vars['Char']->value[0]['id_char'];?>
" id="idForm">
      </div>
      <div class="g-recaptcha" data-sitekey="6LejXnwUAAAAAKERYtxJ1mBD-1cvJrySzXeoEPmv" data-callback="verifyCaptcha"></div>
      <div id="g-recaptcha-error"></div>
      <button type="submit" class="btn btn-primary btn-block my-5" disabled>Enviar</button>
    </form>
  </div>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
