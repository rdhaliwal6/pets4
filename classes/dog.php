<?php
class Dog extends Pet
{
    function __construct()
    {
        $this->setType("dog");
    }

    function talk()
    {
        echo $this->getName()." is barking";
    }

    function fetch()
    {
        echo "<p>".$this->getName()." is fetching</p>";
    }
}
