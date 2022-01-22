<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Site 2</title>
  </head>
  <body>

    <h1>Basic Calculator</h1>
    <hr>
    <h2>Addition</h2>

    <form action = "site2.php" method = "get">
      <input type = "number" name = "num1">
      <br>
      <input type = "number" name = "num2">
      <input type = "submit">
    </form>
    <?php if(isset($_GET["num1"])&& isset($_GET["num2"])):?>
      <br>
      Answer: <?php echo $_GET["num1"] + $_GET["num2"]?>

    <?php endif;?>

    <h2>Subtraction</h2>

    <form action = "site2.php" method = "get">
      <input type = "number" name = "num3">
      <br>
      <input type = "number" name = "num4">
      <input type = "submit">
    </form>
    <?php if(isset($_GET["num3"])&& isset($_GET["num4"])):?>
      <br>
      Answer: <?php echo $_GET["num3"] - $_GET["num4"]?>

    <?php endif;?>

    <h2>Multiplication</h2>

    <form action = "site2.php" method = "get">
      <input type = "number" name = "num5">
      <br>
      <input type = "number" name = "num6">
      <input type = "submit">
    </form>
    <?php if(isset($_GET["num5"])&& isset($_GET["num6"])):?>
      <br>
      Answer: <?php echo $_GET["num5"] * $_GET["num6"]?>

    <?php endif;?>

    <h2>Division</h2>

    <form action = "site2.php" method = "get">
      <input type = "number" name = "num7">
      <br>
      <input type = "number" name = "num8">
      <input type = "submit">
    </form>
    <?php if(isset($_GET["num7"])&& isset($_GET["num8"])):?>
      <br>
      Answer: <?php echo $_GET["num7"] / $_GET["num8"]?>

    <?php endif;?>



  </body>
</html>
