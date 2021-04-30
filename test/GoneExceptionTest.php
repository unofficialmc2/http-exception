<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class GoneExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\GoneException('coucou');
        self::assertEquals('Gone', $exception->getMessageStatus());
        self::assertEquals(410, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
