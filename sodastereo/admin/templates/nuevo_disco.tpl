{include file="header.tpl" title=foo}
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4">
      <h1 class="discografia">Nuevo Disco</h1>
      <form class="form-horizontal" action="http://localhost/sodastereo/admin/discografia/agregar" method="post">
        <div class="form-group">
          <label class="col-sm-2 control-label">NOMBRE:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label">AÑO:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="anio" placeholder="Año">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-default btn-block">Agregar</button>
          </div>
        </div>
      </form>
      <a href="./"><button type="submit" class="btn btn-default btn-block">Cancelar</button></a>
    </div>
  </div>
</div>
{include file="footer.tpl"}
