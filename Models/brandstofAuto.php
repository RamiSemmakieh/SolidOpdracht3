<?php
require_once("../Interfaces/IbrandstofAuto.php");

class BrandstofAuto implements IbrandstofAuto
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

    public function Tanken() : void
    {

    }

    public function MotoAan() : void
    {
        
    }
}


?>