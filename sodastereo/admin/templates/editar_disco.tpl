{include file="header.tpl" title=foo}
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4">
      <h1 class="discografia">Modificar Disco</h1>
      <form class="form-horizontal" action="/eflores/sodastereo/admin/discografia/cambiar/{$disco['id']}" method="post">
        <div class="form-group">
          <label class="col-sm-2 control-label">NOMBRE:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nombre" value="{$disco['nombreDisco']}">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">AÑO:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="anio" value="{$disco['anio']}">
          </div>
        </div>
        <button type="submit" class="btn btn-default btn-block">Cambiar</button>
      </form>
      <a href="./"><button type="submit" class="btn btn-default btn-block">Cancelar</button></a>
    </div>
  </div>
</div>
{include file="footer.tpl"}
