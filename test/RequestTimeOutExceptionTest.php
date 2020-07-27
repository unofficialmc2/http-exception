<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class RequestTimeOutExceptionTest extends TestCase
{

    public function test__construct()
    {
        $exception = new \HttpException\RequestTimeOutException('coucou');
        self::assertEquals('Request Time-out', $exception->getMessageStatus());
        self::assertEquals(408, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
