<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class BadRequestExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\BadRequestException('coucou');
        self::assertEquals('Bad Request', $exception->getMessageStatus());
        self::assertEquals(400, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
