{include file="header.tpl" title=foo}
{include file="navbar.tpl"}
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4">
      {foreach from=$discos item=disco}
        <h1 class="discografia">{$disco['nombreDisco']} ({$disco['anio']})</h1>
        <table class="table table-condensed discografia">
          <tbody>
            {foreach from=$canciones item=cancion}
              {if ($disco['id'] == $cancion['id_disco'])}
                <tr>
                  <td>{$cancion['nombreCancion']}</td>
                </tr>
              {/if}
            {/foreach}
          </tbody>
        </table>
        <a href="discografia/disco/{$disco['id']}"><button type="submit" class="btn btn-default btn-xs btn-block">Detalles</button></a>
        <p class="separador">---------------------------------------------------------------------------------------------------</p>
      {/foreach}
    </div>
  </div>
</div>
{include file="footer.tpl"}
