<?php
require_once("auto.php");

    class showAuto
    {
        private Auto $Auto;

        public function __get($property)
        {
        if (property_exists($this, $property))
        {
            return $this->$property;
        }
        }
        public function __set($property, $value)
        {
        if (property_exists($this, $property))
        {
            $this->$property = $value;
        }
        }

        public function __construct(Auto $auto)
        {
            $this->Auto = $auto;
        }

        public function showAutoInfo() : void
        {
            echo("_____________________________");
            echo("<h3> Auto</h3>");
            echo("<p> Naam: " . $this->Auto->Naam . " </p> ");
            echo("<p> Type: " . $this->Auto->Type . " </p> ");
            echo("<p> Bouwjaar: " . $this->Auto->Bouwjaar . " </p> ");
        }
    }

?>