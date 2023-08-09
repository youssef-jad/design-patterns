<?php

require_once 'Abstraction.php';

$abstraction = new Abstraction(new ConcreteImplementationA());
echo $abstraction->operation();

$abstraction = new Abstraction(new ConcreteImplementationB());
echo $abstraction->operation();