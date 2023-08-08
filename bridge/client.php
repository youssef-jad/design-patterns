<?php

require_once 'ConcreteImplementationA.php';
require_once 'ConcreteImplementationB.php';

$implementationA = new ConcreteImplementationA();
echo $implementationA->operation();

$implementationB = new ConcreteImplementationB();
echo $implementationB->operation();