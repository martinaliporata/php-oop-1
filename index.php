<?php
class Movie {
    public $name;
    public $year;
    public $director;
    public $bestActor;

    function __construct($_bestActor) {
        $this->bestActor = $_bestActor;
    }
};

$gladiator = new Movie(Russel);
echo $gladiator->bestActor;

$gladiator = new Movie();
$batman = new Movie();
$birdman = new Movie();

$gladiator -> name = "Gladiatore";
$gladiator -> year = "2000";
$gladiator -> director = "Ridley Scott";