<?php

namespace Bridge;

interface Implementation
{
    public function operation(): string;
}

class Abstraction
{
    protected $implementation;

    public function __construct(\Bridge\Implementation $implementation)
    {
        $this->implementation = $implementation;
    }

    public function operation(): string
    {
        return $this->implementation->operation();
    }
}