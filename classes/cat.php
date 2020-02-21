<?php
class Cat extends Pet
{
    function __construct()
    {
        $this->setType("cat");
    }

    function talk()
    {
        echo $this->getName()." is meowing";
    }
}
