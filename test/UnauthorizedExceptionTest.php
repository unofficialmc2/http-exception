<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class UnauthorizedExceptionTest extends TestCase
{

    public function test__construct()
    {
        $exception = new \HttpException\UnauthorizedException('coucou');
        self::assertEquals('Unauthorized', $exception->getMessageStatus());
        self::assertEquals(401, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
