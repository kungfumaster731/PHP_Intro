<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Site 1</title>
  </head>
  <body>

    <?php
      echo("<h1> Brandon's Site </h1>");
      echo("<hr>");
      echo("<p> this website sucks <p>");

      $characterName = "not Brandon";
      $characterAge = 1004;
      echo "My name is $characterName <br>";
      echo "I am $characterAge years old. <br>";
      echo "I like my name of $characterName. <br>";
      echo "My mom is very fat. <br>";

      $phrase = "hi";
      $age = 30;
      $number = 300;
      $boolval = true;

      $phrase = "My Academy";
      echo strtolower($phrase), "<br>";
      echo strtoupper($phrase), "<br>";
      echo strlen($phrase), "<br>";
      echo $phrase[0], $phrase[5], $phrase[9], "<br>";
      $phrase[0] = "M";
      echo $phrase, "<br>";
      echo str_replace("My", "Dummy", $phrase), "<br>";
      echo substr($phrase, 3, 9);
      echo 10 % 3;
      $num = 10;
      echo $num++, "<br>";
      echo $num, "<br>";
      $num = 10;
      echo ++$num;

      echo abs(-100), "<br>";
      echo pow(2,4), "<br>";
      echo sqrt(144), "<br>";
      echo max(10,20), "<br>";
      echo min(10,20), "<br>";
      echo round(10.5620390293748329), "<br>";
      echo ceil(2139812983021.13821038), "<br>";
      echo floor(10328428.0923487234), "<br>";
    ?>
    <form action = "site.php" method="get">
      Name: <input type = "text" name = "name">
      <br>
      Age: <input type = "number" name = "age">
      <input type = "submit">
    </form>
    <br>

    <?php if(isset($_GET["name"])&& isset($_GET["age"])):?>
      Your Name is <?php echo $_GET["name"] ?>
      <br>
      You are <?php echo $_GET["age"]?>
      <br>
    <?php endif; ?>

  </body>
</html>
