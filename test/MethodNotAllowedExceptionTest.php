<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class MethodNotAllowedExceptionTest extends TestCase
{

    public function test__construct()
    {
        $exception = new \HttpException\MethodNotAllowedException('coucou');
        self::assertEquals('Method Not Allowed', $exception->getMessageStatus());
        self::assertEquals(405, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
