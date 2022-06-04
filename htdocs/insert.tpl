<!doctype html>
<html lang="de">
  <head>
    {include file='./head.tpl'}
  </head>
  <body>
    <div class="container">
      <form action="insert.php" method="get">
        {foreach $columns as $arr}
            {$arr}
            <input type="text" name="{$arr}" class="form-control" placeholder="{$arr}" title={$arr}>
        {/foreach}
            <input type="submit" name="insert" class="btn btn-primary" value="insert">
        </form>
    </div>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
