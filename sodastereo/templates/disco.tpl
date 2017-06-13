{include file="header.tpl" title=foo}
{include file="navbar.tpl"}
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4 ">
        <h1 class="discografia">{$disco['nombreDisco']} ({$disco['anio']})</h1>
        <img src="imagenes/portada{$disco['id']}.jpg"  class="img-rounded img-responsive center-block">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Duracion</th>
            </tr>
          </thead>
          <tbody>
            {foreach from=$canciones item=cancion}
              <tr>
                <td>{$cancion['#']}</td>
                <td>{$cancion['nombreCancion']}</td>
                <td>{$cancion['duracion']}</td>
              </tr>
            {/foreach}
          </tbody>
        </table>
    </div>
  </div>
</div>
{include file="footer.tpl"}
