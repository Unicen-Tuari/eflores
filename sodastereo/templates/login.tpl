{include file="header.tpl" title=foo}
<div class="container">
  <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4 ">
    <form class="form-signin">
      <h2 class="form-signin-heading">Iniciar sesion</h2>
      <label for="inputEmail" class="sr-only">Usiario</label>
      <input id="inputUsuario" class="form-control" placeholder="Usuario" required="" autofocus="" type="text">
      <label for="inputPassword" class="sr-only">Password</label>
      <input id="inputPassword" class="form-control" placeholder="Password" required="" type="password">
      <a href="login/login"><button class="btn btn-lg btn-default btn-block" type="submit">Sign in</button></a>
    </form>
  </div>
</div>
{include file="footer.tpl"}
