<?php 

namespace Core\Orders;

class Cart 
{

    /**
     * @var Product[]
     */
    private Array $items = [];


    public function add(Product $product)
    {
        $items = $this->getItems();

        foreach($items as $item) {
            
        }
       
        array_push($this->items, $product);
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function total(): float
    {
        return 44;
    }

}