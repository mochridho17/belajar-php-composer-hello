<?php 

namespace ProgramerZamanNow\Belajar;

class Customer {

    public function __construct(private $name)
    {
        
    }

    public function sayHello(string $name): string
    {
        return "Hello $name, My Name is this->name";
    }
}

?>