<?php
namespace Libray\CobaBikinLibrary\Customer;

class Say{
    public function __construct(private string $name)
    {
        
    }
    public function sayHello(string $name):string{
        return "Hello $name, My name is $this->name";
    }
}