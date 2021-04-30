<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class ConflictExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\ConflictException('coucou');
        self::assertEquals('Conflict', $exception->getMessageStatus());
        self::assertEquals(409, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
