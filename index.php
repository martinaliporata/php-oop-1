<?php
// classe
class Movie {
    public $name;
    public $year;
    public $director;
    public $bestActor;
    public $ticketPrice = 0;

    // constructor
    function __construct($_bestActor) {
        $this->bestActor = $_bestActor;
    }

    // method
    public function setTicketPrice($eta){
        if($eta < 10){
            $this -> ticketPrice = 2;
        }
    }

    public function getTicketPrice() {
        return $this -> ticketPrice;
        }
    };

    $gladiator = new Movie();
    $gladiator->setTicketPrice(2);
    $ticketPrice_gladiator = $gladiator -> getTicketPrice();

$gladiator = new Movie(Russel);
echo $gladiator->bestActor;

// variabili d'istanza
$gladiator -> name = "Gladiatore";
$gladiator -> year = "2000";
$gladiator -> director = "Ridley Scott";


$gladiator = new Movie();
$batman = new Movie();