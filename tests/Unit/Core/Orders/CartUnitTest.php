<?php

namespace Tests\Core\Orders;

use Core\Orders\Cart;
use Core\Orders\Product;
use PHPUnit\Framework\TestCase;

class CartUnitTest extends TestCase
{
    public function testCart()
    {
        $cart = new Cart();

        $product1 = new Product(
            id: '1',
            name: 'test',
            price: 12,
            total: 1,
    
        );
        
        $cart->add($product1);
        $cart->add($product1);
        $cart->add(product: new Product(
            id: '2',
            name: 'test2',
            price: 20,
            total: 1,
    
        ));

        $cart->add(product: new Product(
            id: '3',
            name: 'test3',
            price: 10,
            total: 1,
    
        ));

        $this->assertCount(3, $cart->getItems());
        $this->assertEquals(54, $cart->total());
    }

    public function testCartEmpty()
    {
        $cart = new Cart();

        $this->assertCount(0, $cart->getItems());
        $this->assertEquals(0, $cart->total());
    }
}
