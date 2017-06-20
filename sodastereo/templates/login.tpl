{include file="header.tpl" title=foo}
<div class="container">
  <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4 ">
    <form class="form-signin" action="/sodastereo/login/login" method="post">
      <div class="form-group">
        <h2 class="form-signin-heading discografia">Iniciar sesión</h2>
        <label for="inputUsuario" class="sr-only">Usiario</label>
        <input id="inputUsuario" class="form-control" name="usuario" placeholder="Usuario" type="text">
        <label for="inputPassword" class="sr-only">Password</label>
        <input id="inputPassword" class="form-control" name="password" placeholder="Password" type="password">
      </div>
        <button class="btn btn-default btn-block" type="submit">Iniciar sesión</button>
    </form>
    <a href="./"><button type="submit" class="btn btn-default btn-block">Cancelar</button></a>
  </div>
</div>
{include file="footer.tpl"}
