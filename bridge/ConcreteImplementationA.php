<?php

require_once 'Abstraction.php';

class ConcreteImplementationA implements Abstraction
{
    public function operation(): string
    {
        return "ConcreteImplementationA: Here's the result on the platform A.\n";
    }
}