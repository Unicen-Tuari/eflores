{include file="header.tpl" title=foo}
{include file="navbar.tpl"}
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4">
      <h1 class="discografia">DISCOS</h1>
      <a href="./"><button type="submit" class="btn btn-default btn-sm btn-block">VOLVER</button></a>
      <a href="discografia/new"><button type="submit" class="btn btn-default btn-sm btn-block">AGREGAR</button></a>
      <table class="table table-condensed">
        <thead>
          <tr>
            <th>Disco_ID</th>
            <th>Nombre</th>
            <th>Año</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          {foreach from=$discos item=disco}
            <tr>
              <td>{$disco['id']}</td>
              <td>{$disco['nombreDisco']}</td>
              <td>{$disco['anio']}</td>
              <td><a href="discografia/editar/{$disco['id']}"><span class="glyphicon glyphicon-pencil"></span></a></td>
              <td><a href="discografia/borrar/{$disco['id']}"><span class="glyphicon glyphicon-trash"></span></a></td>
            </tr>
          {/foreach}
        </tbody>
      </table>
    </div>
  </div>
</div>
{include file="footer.tpl"}
