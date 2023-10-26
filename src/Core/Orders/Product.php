<?php 

namespace Core\Orders;

use Stringable;

class Product 
{
    public function __construct(
        protected String $id,
        protected String $name,
        protected Float $price,
        protected Int $total
    )
    {}

    public function total(): Float
    {
        return $this->price * $this->total;
    }

    public function totalCalcPorcent(): Float
    {
        $total = $this->price * $this->total;
        $taxa = $total * 0.1;

        return $total + $taxa;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName() : String
    {
        return $this->name;
    }

    public function getPrice(): Float
    {
        return $this->price;
    }
}