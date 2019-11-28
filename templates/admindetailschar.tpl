{include file="head.tpl"}
{include file="navbar.tpl"}
<div class="container">
  <div class="row my-5">
    <div class="col-md-8 mx-auto">
      <h1 class="text-center">Detalles de: {$Char[0]['name']}</h1>
    </div>
  </div>
  <input type="hidden" value={$status} id="userStatus">
  <div class="row my-5">
    <div class="col-md-6 mx-auto">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nickname</th>
            <th scope="col">Campeón favorito</th>
            <th scope="col">Liga</th>
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
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h1 class="text-center">Comentarios sobre {$Char[0]['name']}</h1>
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
  <div class="row">
    <div class="col-md-6 mx-auto mt-5">
      <h2 class="text-center">Deja tu comentario aqui</h2>
    </div>
  </div>
  <div class="row my-5">
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
        <input type="hidden" class="form-control" name="id_char" value="{$Char[0]['id_char']}" id="idForm">
      </div>
      <button type="submit" class="btn btn-primary btn-block my-5">Enviar</button>
    </form>
  </div>

</div>
{include file="footer.tpl"}
