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

    public function totalCalcPorcent()
    {
        $total = $this->price * $this->total;
        $taxa = $total * 0.1;

        return $total + $taxa;
    }
}