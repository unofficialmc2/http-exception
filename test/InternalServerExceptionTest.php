<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class InternalServerExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\InternalServerException('coucou');
        self::assertEquals('Internal Server', $exception->getMessageStatus());
        self::assertEquals(500, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
