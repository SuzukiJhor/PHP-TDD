<?php 

namespace Core\Orders;

class Product 
{
    public function __construct(
        protected String $name,
        protected Float $price,
        protected Int $total
    )
    {}

    public function total(): Float
    {
        return $this->price * $this->total;
    }
}