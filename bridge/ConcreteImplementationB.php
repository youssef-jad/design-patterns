<?php

require_once 'Abstraction.php';

class ConcreteImplementationB implements Abstraction
{
    public function operation(): string
    {
        return "ConcreteImplementationB: Here's the result on the platform B.\n";
    }
}