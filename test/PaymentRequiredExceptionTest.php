<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class PaymentRequiredExceptionTest extends TestCase
{

    public function test__construct()
    {
        $exception = new \HttpException\PaymentRequiredException('coucou');
        self::assertEquals('Payment Required', $exception->getMessageStatus());
        self::assertEquals(402, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
