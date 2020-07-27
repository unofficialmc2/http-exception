<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class BadGatewayExceptionTest extends TestCase
{

    public function test__construct()
    {
        $exception = new \HttpException\BadGatewayException('coucou');
        self::assertEquals('Bad Gateway', $exception->getMessageStatus());
        self::assertEquals(502, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
