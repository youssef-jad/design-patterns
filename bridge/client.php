<?php

include_once 'ConcreteImplementationA.php';
include_once 'ConcreteImplementationB.php';

$implementationA = new ConcreteImplementationA();
echo $implementationA->operation();

$implementationB = new ConcreteImplementationB();
echo $implementationB->operation();