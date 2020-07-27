<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class RequestHeaderExceptionTest extends TestCase
{

    public function test__construct()
    {
        $exception = new \HttpException\RequestHeaderException('coucou');
        self::assertEquals('Request Header', $exception->getMessageStatus());
        self::assertEquals(431, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
