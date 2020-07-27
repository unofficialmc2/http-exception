<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class RequestUriTooLongExceptionTest extends TestCase
{

    public function test__construct()
    {
        $exception = new \HttpException\RequestUriTooLongException('coucou');
        self::assertEquals('Request-URI Too Long', $exception->getMessageStatus());
        self::assertEquals(414, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
