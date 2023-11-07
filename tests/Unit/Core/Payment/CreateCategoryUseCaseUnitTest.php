<?php 

namespace Tests\Core\Payment;

use Core\Payment\PaymentController;
use Core\Payment\PaymentInterface;
use Mockery;
use PHPUnit\Framework\TestCase;
use stdClass;

class PaymentUnitTest extends TestCase
{
    public function testCategory()
    {
        $mockPayment = Mockery::mock(stdClass::class, PaymentInterface::class);

        $payment =  new PaymentController($mockPayment);
        $payment->execute();
        
        $this->assertTrue(true);
    }
}