<?php
require_once("../Interfaces/IelektrischAuto.php");

class ElektrischAuto implements IelektrischAuto
{

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


    public function  __construct()
    {

    }   

    public function Opladen() : void
    {

    }

    public function MotoAan() : void
    {
        
    }
}
