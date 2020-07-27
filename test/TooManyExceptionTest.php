<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class TooManyExceptionTest extends TestCase
{

    public function test__construct()
    {
        $exception = new \HttpException\TooManyException('coucou');
        self::assertEquals('Too Many', $exception->getMessageStatus());
        self::assertEquals(429, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
