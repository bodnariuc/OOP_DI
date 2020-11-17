<?php

// includuje potrebne rozhrani a tridy
include("interfaceBodnariuc.php");
include("ustrednyBodnariuc.php");
include("ustrednaBodnariuc.php");

// inicializace tridy
$test = new ustrednaBodnariuc;
//var_dump($test::TYPE);

// ulozeni hodnoty pomoci konstanty
$test->setNapetiBodnariuc($test::TYPE);

// ziskani hodnoty pomoci funkce get
var_dump ($test->getNapetiBodnariuc());

?>