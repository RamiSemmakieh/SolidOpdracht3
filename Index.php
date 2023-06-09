<?php
    require_once("Models/TonenAuto.php");

$Auto1 = new Auto("Chiron", "BrandstofAuto", 1997);
$Auto2 = new Auto("Tesla V5", "ElektrischAuto", 2017);

$showAuto1 = new showAuto($Auto1);
$showAuto1->showAutoInfo();

$showAuto2 = new showAuto($Auto2);
$showAuto2->showAutoInfo();