<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class ServiceUnavailableExceptionTest extends TestCase
{

    public function test__construct()
    {
        $exception = new \HttpException\ServiceUnavailableException('coucou');
        self::assertEquals('Service Unavailable', $exception->getMessageStatus());
        self::assertEquals(503, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
