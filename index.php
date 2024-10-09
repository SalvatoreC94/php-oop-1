<?php

class Movie {
    public $title;
    public $director;
    public $year;
   

    // Costruttore
    public function __construct($title, $director, $year) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        
    }

    // Restituisce i dettagli del film
    public function getDetails() {
        return "{$this->title} ({$this->year}), directed by {$this->director}";
    }
}

// Crea due oggetti Movie
$movie1 = new Movie("Joker", "Todd Phillips", 2019);
$movie2 = new Movie("Harry Potter e l'Ordine della Fenice", "David Yates", 2007);
$movie3 = new Movie("Blow", "Ted Demme", 2001);
$movie4 = new Movie("The Founder", "John Lee Hancock", 2016);
$movie5 = new Movie("The Social Network", "David Fincher", 2010);

// Stampa i dettagli dei film
echo "<h1>Movie Details</h1>";
echo "<p>" . $movie1->getDetails() . "</p>";
echo "<p>" . $movie2->getDetails() . "</p>";
echo "<p>" . $movie3->getDetails() . "</p>";
echo "<p>" . $movie4->getDetails() . "</p>";
echo "<p>" . $movie5->getDetails() . "</p>";
?>