<?php

namespace Bridge;

$abstraction = new \Bridge\Abstraction(new \Bridge\ConcreteImplementationA());
printf($abstraction->operation());

$abstraction = new \Bridge\Abstraction(new \Bridge\ConcreteImplementationB());
printf($abstraction->operation());