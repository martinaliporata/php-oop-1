<?php
// classe
class Movie {
    // instance variables
    public $name;
    public $year;
    public $director;
    public $bestActor;
    public $ticketPrice;

    // constructor
    public function __construct($movieName, $movieYear, $movieDirector, $movieBestActor, $movieTicketPrice) {
        $this-> name = $movieName;
        $this-> year = $movieYear;
        $this-> director = $movieDirector;
        $this-> bestActor = $movieBestActor;
        $this-> ticketPrice = $movieTicketPrice;
        // public $name è $this-> name; mentre __construct($movieName è = $movieName   
    }

    // method
    public function getDescription() {
        return "{$this -> name} is a {$this -> year} film directed by {$this -> director} and whose best actor is {$this -> bestActor} and it's now out in cinemas at the price of {$this -> ticketPrice}";
    }

    };

    // Questi sono gli oggetti movie
    $gladiator = new Movie("Gladiator", "2000", "Ridley Scott", "Russell Crowe", "15");
    $titanic = new Movie("Titanic", "1997", "James Cameron", "Leonardo Di Caprio", "8");

    echo $gladiator -> getDescription();
    echo $titanic -> getDescription();