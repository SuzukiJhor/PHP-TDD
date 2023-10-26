<?php 

namespace Tests\Core\Orders;

use Core\Orders\Customer;
use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase
{
    public function testAttributes() 
    {
        $customer = new Customer(
            name: 'Jhordan'
        );
        $this->assertEquals('Jhordan', $customer->getName());

        $customer->changeName(
            name: "new name"
        );
        $this->assertEquals('new name', $customer->getName());

        $customer->getName();

        $this->assertTrue(true);
    }
}