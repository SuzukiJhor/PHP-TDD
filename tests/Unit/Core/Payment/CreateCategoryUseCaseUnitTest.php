<?php

namespace Tests\Core\Payment;

use Core\Payment\PaymentController;
use Core\Payment\PaymentInterface;
use Mockery;
use PHPUnit\Framework\TestCase;
use stdClass;

class PaymentUnitTest extends TestCase
{

    protected function setUp(): void
    {
        
    }

    public function testCategory()
    {
        /// arrange
        $mockPayment = Mockery::mock(stdClass::class, PaymentInterface::class);
        $mockPayment
            ->shouldReceive('makePayment')
            ->once(1)
            ->andReturn(true);

        $mockPayment
            ->shouldReceive('createPlan')
            ->andReturn(true);

        $payment =  new PaymentController($mockPayment);

        // act
        $response =  $payment->execute();

        // assert
        $this->assertTrue($response);
    }

    protected function tearDown(): void
    {
        Mockery::close();

        parent::tearDown();
    }
}
