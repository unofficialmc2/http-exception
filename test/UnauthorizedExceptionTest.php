<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class UnauthorizedExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\UnauthorizedException('coucou');
        self::assertEquals('Unauthorized', $exception->getMessageStatus());
        self::assertEquals(401, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
