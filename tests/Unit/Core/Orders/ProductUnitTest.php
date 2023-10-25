<?php 

namespace Tests\Core\Orders;

use Core\Orders\Product;
use PHPUnit\Framework\TestCase;

class ProductUnitTest extends TestCase
{
    public function testCalc()
    {
        $product = new Product(
            name: "prodx",
            price: 10,
            total: 20
        );

        $this->assertEquals(200, $product->total());

        $product->total();

        $this->assertTrue(true);
    }
}