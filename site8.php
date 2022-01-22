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
        var $title;
        var $author;
        var $pages;
      }

      $book1 = new Book;
      $book1->title = "Harry Potter";
      $book1->author = "JK Rowling";
      $book->pages=400;
      ?>

  </body>
</html>
