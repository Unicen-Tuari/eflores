{include file="header.tpl" title=foo}
{include file="navbar.tpl"}
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-2">
      <h1 class="discografia">DISCOS</h1>
      <a href="discografia"><button type="submit" class="btn btn-default btn-block">LISTA</button></a>
      <a href="discografia/new"><button type="submit" class="btn btn-default btn-block">AGREGAR</button></a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4">
      <h1 class="discografia">CANCIONES</h1>
      <a href="canciones"><button type="submit" class="btn btn-default btn-block">LISTA</button></a>
      <a href="canciones/new"><button type="submit" class="btn btn-default btn-block">AGREGAR</button></a>
    </div>
  </div>
</div>
{include file="footer.tpl"}
