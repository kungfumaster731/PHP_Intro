<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Site 3</title>
  </head>
  <body>
    <h1>Mad Libs</h1>

    <form action = "site3.php" method = "get">
      Color: <input type = "text" name = "color"> <br>
      Plural Noun: <input type = "text" name = "pluralNoun"> <br>
      Celebrity: <input type = "text" name = "celebrity"> <br>
      <input type = "submit">
    </form>

    <?php if(isset($_GET["color"]) && isset($_GET["pluralNoun"]) && isset($_GET["celebrity"])): ?>
      <?php
        $color = $_GET["color"];
        $pluralNoun = $_GET["pluralNoun"];
        $Celebrity = $_GET["celebrity"];
        echo "Roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $Celebrity <br>";
      ?>
    <?php endif;?>
  </body>
</html>
