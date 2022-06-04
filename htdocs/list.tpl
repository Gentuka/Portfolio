<!doctype html>
<html lang="de">
  <head>
    {include file='./head.tpl'}
  </head>
  <body>
    <div class="container">
      <form method="GET" action="">
        <table class="table">
          <thead>
            <tr>
              {foreach $columns as $column}
                <th scope="col">{$column}</th>
              {/foreach}
            </tr>
          </thead>
          <tbody>
          {foreach $array as $arr}
            <tr>
              <td>{$arr['test']}</td>
              <td>{$arr['gent']}</td>
              <td>{$arr['teot']}</td>
              <td>
                <a href="delete.php?id={$arr['id']}">delete</a>
                <a href="update.php?id={$arr['id']}">update</a>
                <a href="read.php?id={$arr['id']}">read</a>
              </td>
            </tr>
          {/foreach}
          </tbody>
        </table>
      </form>
      <a href="insert.php">insert</a>
    </div>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
