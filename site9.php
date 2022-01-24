<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Site 9</title>
  </head>
  <body>
    <h1>Setter and Getter for a Class</h1>
    <?php
      class Movie{
        public $title;
        private $rating;

        function __construct($title, $rating){
          $this->title = $title;
          $this->setRating($rating);
        }

        function getRating(){
          return $this->rating;
        }

        function setRating($rating){
          $rating = strtoupper($rating);
          if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "TV-MA" || $rating == "R" || $rating == "NR"){
            $this->rating = $rating;
          }
          else{
            $this->rating = "NR";
          }
        }
      }
      $avengers = new Movie("Avengers", "r");
      $avengers->setRating("pg-13");
      echo $avengers->getRating();
     ?>

     <h1>Inheritance</h1>

     <?php
      class Chef{
        function makeChicken(){
          echo "The chef makes chicken. <br>";
        }
        function makeSalad(){
          echo "The chef makes salad. <br>";
        }
        function makeSpecialDish(){
          echo "The chef makes BBQ ribs. <br>";
        }
      }

      class ItalianChef extends Chef{

      }

      $chef = new Chef();
      $chef->makeChicken();

      $chef2 = new ItalianChef();
      $chef2->makeSpecialDish();
      ?>
  </body>
</html>
