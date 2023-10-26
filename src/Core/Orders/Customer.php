<?php 

namespace Core\Orders;

class Customer 
{
    public function __construct(
        protected string $name
    )
    {}

    public function changeName(String $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }


}