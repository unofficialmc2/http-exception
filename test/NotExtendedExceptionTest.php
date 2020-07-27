<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class NotExtendedExceptionTest extends TestCase
{

    public function test__construct()
    {
        $exception = new \HttpException\NotExtendedException('coucou');
        self::assertEquals('Not extended', $exception->getMessageStatus());
        self::assertEquals(510, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
