<?php

class Bird extends Pet
{
    function __construct()
    {
        $this->setType("bird");
    }

    function talk()
    {
        echo $this->getName()." is chirping";
    }
}
