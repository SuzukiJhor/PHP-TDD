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
        $getId = $product->getId();
        $qtd = isset($this->items[$getId]) ? $this->items[$getId]['qtd'] + 1 : 1;
     
        $this->items[$getId] =  [
            'qtd'=> $qtd,
            'product'=> $product
        ];
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function total(): float
    {
        $total = 0;

        foreach ($this->items as $item) {
            $product = $item['product'];
            $total += $product->getPrice() * $item['qtd'];
        }
        return $total;
    
    }

}