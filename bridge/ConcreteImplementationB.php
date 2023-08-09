<?php

require_once 'Implementation.php';

class ConcreteImplementationB implements Implementation
{
    public function operation(): string
    {
        return "ConcreteImplementationB: Here's the result on the platform B.\n";
    }
}