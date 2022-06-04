<!doctype html>
<html lang="de">
  <head>
    {include file='./head.tpl'}
  </head>
  <body>
    <div class="container">
      <form action="update.php" method="get">
        {foreach $array as $key => $arr}
        {$key}
            <input type="text" name="{$key}" value="{$arr}" class="form-control" placeholder={$key} title="{$key}">
        {/foreach}
            <input type="submit" name="update" class="btn btn-primary" value="update">
        </form>
    </div>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
