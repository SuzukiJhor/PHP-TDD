<?php 

namespace Tests\Core\Orders;

use Core\Orders\Product;
use Mockery;
use PHPUnit\Framework\TestCase;

class ProductUnitTest extends TestCase
{
    public function testCalc()
    {
        $product = new Product(
            id: '1',
            name: "prodx",
            price: 10,
            total: 20
        );

        $this->assertEquals(200, $product->total());

        $product->total();

        $this->assertTrue(true);
    }

    public function testCalcPorcent()
    {
        $product = new Product(
            id: '1',
            name: 'prodx',
            price: 100,
            total: 2
        );

        $this->assertEquals(220, $product->totalCalcPorcent());
    }

    public function testGetName()
    {
        $product = new Product(
            id: '1',
            name: 'prodx',
            price: 100,
            total: 2
        );

        $this->assertEquals('prodx', $product->getName());
        $this->assertEquals(100, $product->getPrice());
        $this->assertEquals('1', $product->getId());


        $this->assertTrue(true);
    }

    public function testExampleMock()
    {
        $mockProduct = Mockery::mock(Product::class, [
            'id',
            'name',
            12,
            1
        ]);
        
        $mockProduct->shouldReceive('getId')->andReturn('id');

        Mockery::close();

        $this->assertTrue(true);
    }
}