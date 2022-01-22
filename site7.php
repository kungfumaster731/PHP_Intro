<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Site 7</title>
  </head>
  <body>
    <h1>Switch Statement</h1>

    <form action = "site7.php" method = "post">
      What was your grade?
      <input type = "text" name = "grade">
      <input type = "submit">
    </form>

    <?php
      $grade = $_POST["grade"];
      switch($grade){
        case "A":
          echo "You did terrible... XD";
          break;
        case "B":
          echo "You should drop out of school...";
          break;
        case "C":
          echo "Is Head Empty?";
          break;
        case "D":
          echo "Abandoned by parents..XD";
          break;
        case "E":
          echo "You need surgery for a new brain...";
          break;
        case "F":
          echo "Just don't go to school......";
          break;
      }
     ?>
     <h1>While Loop</h1>
     <?php
      $index = 1;
      while($index <= 5){
        echo "$index <br>";
        $index+=1;
      }
      do{
        echo "$index <br>";
        $index++;
      }while($index <= 5);
      ?>
      <h1> For Loop</h1>

      <?php
        for($i = 1; $i <=5; $i++){
          echo "$i <br> <br>";
        }

        $luckyNumbers = array(4, 12, 86, 32, 643, 29, 43, 23, 69);
        for ($i = 0; $i <= count($luckyNumbers); $i++){
          echo "$luckyNumbers[$i] <br>";
        }
       ?>

  </body>
</html>
