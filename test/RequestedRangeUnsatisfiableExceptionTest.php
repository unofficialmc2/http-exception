<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class RequestedRangeUnsatisfiableExceptionTest extends TestCase
{

    public function test__construct()
    {
        $exception = new \HttpException\RequestedRangeUnsatisfiableException('coucou');
        self::assertEquals('Requested range unsatisfiable', $exception->getMessageStatus());
        self::assertEquals(416, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
