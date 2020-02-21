<?php

class Pet
{
    private $_name;
    private $_color;
    private $_type;

    function __construct($name="unknown",$color="?"){
        $this->setType("pet");
    }

    function eat()
    {
        echo $this->_name." is eating<br>";
    }

    function getColor(){
        return $this->_color;
    }

    function setColor($color){
        $this->_color = $color;
    }

    function getType() {
        return $this->_type;
    }

    function setType($type)
    {
        $this->_type = $type;
    }

    function getName(){
        return $this->_name;
    }

    function setName($name){
        $this->_name = $name;
    }

    function talk()
    {
        echo $this->_name." is talking<br>";
    }
}