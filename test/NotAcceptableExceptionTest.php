<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class NotAcceptableExceptionTest extends TestCase
{

    public function test__construct()
    {
        $exception = new \HttpException\NotAcceptableException('coucou');
        self::assertEquals('Not Acceptable', $exception->getMessageStatus());
        self::assertEquals(406, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
