<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Site 4</title>
  </head>
  <body>
    <h1>Array</h1>
    <form action = "site4.php" method = "post">
      Password: <input type = "password" name = "password"> <br>
      <input type = "submit">
    </form>
    <br><br>
    <?php
      //echo $_POST["password"];
     ?>

    <?php
      $friends = array("Alex", "Kevin", "your mom");
      $friends[2] = 10;
      echo $friends[2], "<br>";
      echo count($friends);
     ?>

     <form action = "site4.php" method = "post">
       Apple: <input type = "checkbox" name = "fruits[]" value = "apple"> <br>
       Grape: <input type = "checkbox" name = "fruits[]" value = "grape"> <br>
       Mango: <input type = "checkbox" name = "fruits[]" value = "mango"> <br>
       Orange: <input type = "checkbox" name = "fruits[]" value = "orange"> <br>
       <input type = "submit">
     </form>

     <?php
      $fruits = $_POST["fruits"];
      echo $fruits[0];*/
      ?>
      <form action = "site4.php" method = "post">
        <input type = "text" name = "student">
        <input type = "submit">
      </form>
      <?php
        $grades = array("Brandon" => "A++", "Andrew" => "D-", "Tom" => "F");
        echo $grades[$_POST["student"]];
       ?>

  </body>
</html>
