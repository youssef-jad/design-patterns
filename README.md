# design patterns

This Repo is mainly for implementing design patterns in PHP.

## Chain of Responsibility

The Chain of Responsibility is a behavioral design pattern that allows an object to pass the request along the chain of potential handlers until an object handles the request. It decouples sender and receiver of a request based on the type of request. This pattern comes under behavioral patterns. In this pattern, normally each receiver contains a reference to another receiver. If one object cannot handle the request then it passes the same to the next receiver and so on.

[Chain of Responsibility Pattern](ChainOfResponsibility.php)

