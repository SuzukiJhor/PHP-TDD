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

        $cart->add(product: new Product(
            id: '1',
            name: 'test',
            price: 12,
            total: 1,
    
        ));
        
        $cart->add(product: new Product(
            id: '1',
            name: 'test',
            price: 12,
            total: 1,
    
        ));

        $cart->add(product: new Product(
            id: '2',
            name: 'test',
            price: 20,
            total: 1,
    
        ));

        $this->assertCount(3, $cart->getItems());

        $this->assertEquals(44, $cart->total());
    }
}
