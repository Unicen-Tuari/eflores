{include file="header.tpl" title=foo}
{include file="navbar.tpl"}
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
      <img src="imagenes/home.png" class="img-rounded img-responsive center-block">
      {foreach from=$texto item=text}
        <p>
          {$text['text']}
        </p>
      {/foreach}
    </div>
  </div>
</div>
<footer class="footer">
  <div class="container">
    <p class="text-muted">Seguinos en: <img src="imagenes/facebook_icono.ico"> <img src="imagenes/twitter_icono.ico"> <img src="imagenes/youtube_icono.png"></p>
  </div>
</footer>
{include file="footer.tpl"}
