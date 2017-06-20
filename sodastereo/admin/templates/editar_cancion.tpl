{include file="header.tpl" title=foo}
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4">
      <h1 class="discografia">Modificar Cancion</h1>
      <form class="form-horizontal" action="/sodastereo/admin/canciones/cambiar/{$cancion['id']}" method="post">
        <div class="form-group">
          <label class="col-sm-2 control-label ">DISCO ID:</label>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">{$cancion['id_disco']}</span>
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
            <input type="text" class="form-control" name="#" value="{$cancion['#']}">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">NOMBRE:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nombre" value="{$cancion['nombreCancion']}">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">DURACION:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="duracion" value="{$cancion['duracion']}">
          </div>
        </div>
        <button type="submit" class="btn btn-default btn-block">Cambiar</button>
      </form>
      <a href="./"><button type="submit" class="btn btn-default btn-block">Cancelar</button></a>
    </div>
  </div>
</div>
{include file="footer.tpl"}
