<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class NotImplementedExceptionTest extends TestCase
{

    public function test__construct()
    {
        $exception = new \HttpException\NotImplementedException('coucou');
        self::assertEquals('Not Implemented', $exception->getMessageStatus());
        self::assertEquals(501, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
