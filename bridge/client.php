<?php

namespace Bridge;

$abstraction = new \Bridge\Abstraction(new \Bridge\ConcreteImplementationA());
echo htmlspecialchars($abstraction->operation(), ENT_QUOTES, 'UTF-8');

$abstraction = new \Bridge\Abstraction(new \Bridge\ConcreteImplementationB());
echo htmlspecialchars($abstraction->operation(), ENT_QUOTES, 'UTF-8');