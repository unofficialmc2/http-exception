<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class RetryWithExceptionTest extends TestCase
{

    public function test__construct()
    {
        $exception = new \HttpException\RetryWithException('coucou');
        self::assertEquals('Retry With', $exception->getMessageStatus());
        self::assertEquals(449, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
