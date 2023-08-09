<?php

namespace Bridge;

$abstraction = new \Bridge\Abstraction(new \Bridge\ConcreteImplementationA());
echo $abstraction->operation();

$abstraction = new \Bridge\Abstraction(new \Bridge\ConcreteImplementationB());
echo $abstraction->operation();