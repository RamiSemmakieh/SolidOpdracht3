<?php
    require_once("Models/showAuto.php");

$Auto1 = new Auto("Chiron", "BrandstofAuto", 1995);
$Auto2 = new Auto("Tesla V5", "ElektrischAuto", 2020);

$showAuto1 = new showAuto($Auto1);
$showAuto1->showAutoInfo();

$showAuto2 = new showAuto($Auto2);
$showAuto2->showAutoInfo();