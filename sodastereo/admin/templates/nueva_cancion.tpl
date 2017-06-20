{include file="header.tpl" title=foo}
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4">
      <h1 class="discografia">Nueva Cancion</h1>
      <form class="form-horizontal" action="/sodastereo/admin/canciones/agregar" method="post">
        <div class="form-group">
          <label class="col-sm-2 control-label ">DISCO ID:</label>
          <div class="col-sm-10">
            <select name="id_disco" class="form-control">
              {foreach from=$discos item=disco}
              <option value="{$disco['id']}">{$disco['id']} ({$disco['nombreDisco']})</option>
              {/foreach}
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">#:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="#" placeholder="Nro">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">NOMBRE:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">DURACION:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="duracion" placeholder="HH:MM:SS">
          </div>
        </div>
        <button type="submit" class="btn btn-default btn-block">Agregar</button>
      </form>
      <a href="./"><button type="submit" class="btn btn-default btn-block">Cancelar</button></a>
    </div>
  </div>
</div>
{include file="footer.tpl"}
