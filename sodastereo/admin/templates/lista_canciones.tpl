{include file="header.tpl" title=foo}
{include file="navbar.tpl"}
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4">
      <h1 class="discografia">CANCIONES</h1>
      <a href="./"><button type="submit" class="btn btn-default btn-sm btn-block">VOLVER</button></a>
      <a href="canciones/new"><button type="submit" class="btn btn-default btn-sm btn-block">AGREGAR</button></a>
      <table class="table table-condensed">
        <thead>
          <tr>
            <th>Disco_ID</th>
            <th>#</th>
            <th>Nombre</th>
            <th>Duracion</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          {foreach from=$canciones item=cancion}
            <tr>
              <td>{$cancion['id_disco']}</td>
              <td>{$cancion['#']}</td>
              <td>{$cancion['nombreCancion']}</td>
              <td>{$cancion['duracion']}</td>
              <td><a href="canciones/editar/{$cancion['id']}"><span class="glyphicon glyphicon-pencil"></span></a></td>
              <td><a href="canciones/borrar/{$cancion['id']}"><span class="glyphicon glyphicon-trash"></span></a></td>
            </tr>
          {/foreach}
        </tbody>
      </table>
    </div>
  </div>
</div>
{include file="footer.tpl"}
