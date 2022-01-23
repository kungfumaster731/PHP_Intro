<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Site 8</title>
  </head>
  <body>

    <h1>Include Method</h1>

    <?php $title = "My First Post";
    $author = "Brandon";
    $wordCount = 400;
    include "header.php";
    $wordCount = 1000;
    echo $wordCount;
    ?>

    <?php include "footer.php" ?>
    <h1>Function</h1>

    <?php
    include "randomFunc.php";
    echo $feetInMile;
     ?>
     <h1>Class and Object</h1>

     <?php
      class Book{
        var $name;
        var $title;
        var $author;
        var $pages;

        function __construct($aName, $aTitle, $aAuthor, $aPages){
          $this->name = $aName;
          $this->title = $aTitle;
          $this->author = $aAuthor;
          $this->pages = $aPages;
        }
      }

      $book1 = new Book("Book 1", "Harry Potter", "JK Rowling", 400);
      $book2 = new Book("Book 2", "Lord Of The Rings", "Tolkien", 700);
      echo "<h3>", $book1->name, "</h3>", "<br>";
      echo $book1->title, "<br>";
      echo $book1->author, "<br>";
      echo $book1->pages, "<br>";

      echo "<h3>", $book2->name, "</h3>", "<br>";
      echo $book2->title, "<br>";
      echo $book2->author, "<br>";
      echo $book2->pages, "<br>";

      ?>

      <h1>Object Functions</h1>

      <?php
        class Student{
          var $name;
          var $major;
          var $gpa;

          function __construct($name, $major, $gpa){
            $this->name = $name;
            $this->major=$major;
            $this->gpa=$gpa;
          }

          function hasHonors(){
            if($this->gpa >= 3.5){
              return "true <br>";
            }

            return "false <br>";
          }
        }

        $student1 = new Student("Brandon", "Computer Engineering", 3.9);
        $student2 = new Student("Daniel", "Plumbing", 1);
        $student3 = new Student("Celena", "Breathing", 0.1);

        echo $student1->hasHonors();
        echo $student2->hasHonors();
        echo $student3->hasHonors();

       ?>

       <h1>Challenge: Anime Class</h1>

       <?php
       // creat an anime class that will take three variables: name, score(0,10), gmp_legendre
       // create a constructor that overwrites those three variables from the user inputs
       // create a custom function for checking the score, whether it is bad, okay, or amazing
       // output everything including all the variables and score checking results
        class Anime{
         var $name;
         var $genre;
         var $score;
         function __construct($name, $genre, $score){
           $this->name = $name;
           $this->genre = $genre;
           $this->score = $score;
         }

         function isGood(){
           if($this->score >= 8){
             return "Very Good <br>";
           }
           elseif($this->score >= 5){
             return "Okay <br>";
           }
           else{
             return "Bad <br>";
           }
         }
        }



        $anime1 = new Anime("Sword Art Online", "Isekai", 9);
        $anime2 = new Anime("Attack On Titan", "Shonen", 7);
        $anime3 = new Anime("Magi", "Adventure", 8);



        echo $anime1->name, ", ";
        echo $anime1->genre, ", ";
        echo $anime1->score, ", ";
        echo $anime1->isGood(), "<br>";

        echo $anime2->name, ", ";
        echo $anime2->genre, ", ";
        echo $anime2->score, ", ";
        echo $anime2->isGood(), "<br>";

        echo $anime3->name, ", ";
        echo $anime3->genre, ", ";
        echo $anime3->score, ", ";
        echo $anime3->isGood(), "<br>";
        ?>
  </body>
</html>
