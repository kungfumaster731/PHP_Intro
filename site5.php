<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Site 5</title>
  </head>
  <body>
    <h1>Function</h1>

    <?php
      function sayHi($name, $age){
        echo "Hi $name, You are $age years old. <br>";
      }

      sayHi("Brandon", 14);

      function cube($num){
        return $num * $num * $num;
      }
      $cubeResult = cube(4);
      echo $cubeResult;
     ?>

     <h1>If Statement</h1>
     <?php
      $isMale = true;
      $isFemale = false;
      if ($isMale || !$isFemale){
        echo "You are male.";
      }
      elseif ($isMale || $isFemale){
        echo "You are male. 2";
      }
      else{
        echo "You are not male.";
      }
      ?>

      <h1>Function with If Statement</h1>
      <?php
        function getMax($num1, $num2){
          if($num1 > $num2){
            return $num1;
          }
          else {
            return $num2;
          }
        }
        echo getMax(300,100), "<br>";

        function getMax2($num1,$num2,$num3){
          if($num1>=$num2 && $num1 >= $num3){
            return $num1;
          }
          elseif($num2>=$num1&&$num2>=$num1){
            return $num2;
          }
          else{
            return $num3;
          }
        }
        echo getMax2(300,150,301), "<br>";
       ?>
  </body>
</html>
