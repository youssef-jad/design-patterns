<?php

namespace Bridge;

class ConcreteImplementationB implements \Bridge\Implementation
{
    public function operation(): void
    {
        print "ConcreteImplementationB: Here's the result on the platform B.\n";
    }
}