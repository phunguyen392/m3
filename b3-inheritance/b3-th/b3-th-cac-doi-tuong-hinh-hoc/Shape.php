<?php

class Shape
{
    function __construct(public string $name)
    {
    }

    function show(): string
    {
        return "I am a shape. My name is $this->name";
    }
}