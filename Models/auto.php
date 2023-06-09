<?php

class Auto
{
    private String $Naam;
    private String $Type;
    private Int $Bouwjaar;
    
     
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

    
    public function  __construct(String $naam, String $type, Int $bouwjaar)
    {
        $this->Naam = $naam;
        $this->Type = $type;
        $this->Bouwjaar = $bouwjaar;
    }   
}

?>