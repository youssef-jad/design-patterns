<?php

namespace Bridge;

class ConcreteImplementationA implements \Bridge\Implementation
{
    public function operation(): void
    {
        print "ConcreteImplementationA: Here's the result on the platform A.\n";
    }
}