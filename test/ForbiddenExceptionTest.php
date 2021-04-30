<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class ForbiddenExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\ForbiddenException('coucou');
        self::assertEquals('Forbidden', $exception->getMessageStatus());
        self::assertEquals(403, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
