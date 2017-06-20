<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li {if $active == 'home'}class="active"{/if}><a href="/sodastereo/home">HOME</a></li>
        <li {if $active == 'biografia'}class="active"{/if}><a href="/sodastereo/biografia">BIOGRAFIA</a></li>
        <li class="dropdown {if $active == 'discografia'}active{/if}">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DISCOGRAFIA<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/sodastereo/discografia">COMPLETA</a></li>
            <li class="divider" role="separator"></li>
            {foreach from=$discos item=disco}
              <li><a href="/sodastereo/discografia/disco/{$disco['id']}">{$disco['nombreDisco']} ({$disco['anio']})</a></li>
            {/foreach}
        </ul>
        <li {if $active == 'contacto'}class="active"{/if}><a href="/sodastereo/contacto">CONTACTO</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li {if $active == 'admin'}class="active"{/if}><a href="/sodastereo/admin">{$admin}</a></li>
        <li><a href="/sodastereo/admin/logout">{$logout}</a></li>
      </ul>
    </div>
  </div>
</nav>
