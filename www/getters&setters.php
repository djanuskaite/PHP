<?php

class Movie
{
    public $title;
    private $rating; // it has to be inside class to be seen

    function __construct($title, $rating)
    {
        $this->title = $title;
//        $this->rating = $rating;
        $this->setRating($rating); // kad negaletume bet kokio rating ivesti
    }

    function getRating() // reikalingas tam, kad gautume private rating
    {
        return $this->rating;
    }

    function setRating($rating)
    {
        if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
            $this->rating = $rating;
        } else {
            $this->rating = "NR";
        }
    }
}

$avengers = new Movie("Avengers", "Lalala");
// G, PG, PG-13, R, NR
$avengers->setRating("Lalala");
echo $avengers->getRating();
