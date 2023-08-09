<?php

require_once 'Implementation.php';

class ConcreteImplementationA implements Implementation
{
    public function operation(): string
    {
        return "ConcreteImplementationA: Here's the result on the platform A.\n";
    }
}