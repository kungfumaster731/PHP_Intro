<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Site 9</title>
  </head>
  <body>
    <h1>Setter and Getter for a class</h1>
    <?php
      class Movie{
        public $title;
        private $rating;

        function __construct($title, $rating){
          $this->title = $title;
          $this->rating = $rating;
        }

        function getRating(){
          return $this->rating;
        }

        function setRating($rating){
          if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "TV-MA" || $rating == "R" || $rating == "NR"){
            $this->rating = $rating;
          }
          else{
            $this->rating = "NR";
          }
        }
      }
      $avengers = new Movie("Avengers", "PG-13");
      $avengers->setRating("PG");
      echo $avengers->getRating();
     ?>
  </body>
</html>
