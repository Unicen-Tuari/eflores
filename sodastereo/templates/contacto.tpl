{include file="header.tpl" title=foo}
{include file="navbar.tpl"}
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 ">
      <form action="/eflores/sodastereo/contacto/agregar" method="post">
        <div class="form-group">
          <label>Nombre y Apellido</label>
          <input type="text" class="form-control" name="nombre" placeholder="Nombre Apellido">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control"  name="email" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputText">Mensaje</label>
          <textarea class="form-control" rows="3" name="mensaje" placeholder="Texto"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </div>
</div>
{include file="footer.tpl"}
