<!doctype html>
<html lang="de">
  <head>
    {include file='./head.tpl'}
  </head>
  <body>
    <div class="container">
        {foreach $array as $key => $arr}
            {$key}: {$arr} <br>
        {/foreach}
    </div>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
