<?php
require_once "./classes/Movie.php";

$film1 = new Movie("il film bellissimo","ITA","quentin tarallino","12/12/2011");


$film2 = new Movie("il film cruento","JAP","cristo nolan","22/10/2014");
 
var_dump($film1);
var_dump($film2);
?>