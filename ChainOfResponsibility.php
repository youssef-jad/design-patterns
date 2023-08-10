<?php

interface Handler
{
    public function setNext(Handler $handler);
    public function handle($request);
}

class ConcreteHandler1 implements Handler
{
    private $nextHandler;

    public function setNext(Handler $handler)
    {
        $this->nextHandler = $handler;
    }

    public function handle($request)
    {
        if ($request == "run") {
            echo "ConcreteHandler1 handled the request\n";
        } elseif ($this->nextHandler) {
            $this->nextHandler->handle($request);
        }
    }
}

class ConcreteHandler2 implements Handler
{
    private $nextHandler;

    public function setNext(Handler $handler)
    {
        $this->nextHandler = $handler;
    }

    public function handle($request)
    {
        if ($request == "stop") {
            echo "ConcreteHandler2 handled the request\n";
        } elseif ($this->nextHandler) {
            $this->nextHandler->handle($request);
        }
    }
}

class Client
{
    public function run()
    {
        $handler1 = new ConcreteHandler1();
        $handler2 = new ConcreteHandler2();

        $handler1->setNext($handler2);

        $handler1->handle("run");
        $handler1->handle("stop");
    }
}

$client = new Client();
$client->run();

?>