<?php
namespace Animals;
use Abstract\Animal;
use Interface\Edible;
class Chicken extends Animal implements Edible
{
    function makeSound()
    {
        return "Chicken: gaga";
    }
    function howToEat(){
        return "an co";
    }
}