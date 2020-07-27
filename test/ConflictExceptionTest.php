<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class ConflictExceptionTest extends TestCase
{

    public function test__construct()
    {
        $exception = new \HttpException\ConflictException('coucou');
        self::assertEquals('Conflict', $exception->getMessageStatus());
        self::assertEquals(409, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
