<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class GatewayTimeOutExceptionTest extends TestCase
{

    public function test__construct()
    {
        $exception = new \HttpException\GatewayTimeOutException('coucou');
        self::assertEquals('Gateway Time-out', $exception->getMessageStatus());
        self::assertEquals(504, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
