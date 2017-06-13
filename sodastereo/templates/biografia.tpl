{include file="header.tpl" title=foo}
{include file="navbar.tpl"}
<div class="container-fluid biografia">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
      {foreach from=$texto item=text}
        <p>
          {$text['text']}
        </p>
      {/foreach}
    </div>
  </div>
</div>
{include file="footer.tpl"}
