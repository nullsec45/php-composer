<?php
namespace Library\CobaBikinLibrary;

class Say{
    public function __construct(private string $name)
    {
        
    }
    public function sayHello(string $name="Guest"):string{
        return "Hello $name, My name is $this->name";
    }
}