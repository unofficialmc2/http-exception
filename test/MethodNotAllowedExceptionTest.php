<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class MethodNotAllowedExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\MethodNotAllowedException('coucou');
        self::assertEquals('Method Not Allowed', $exception->getMessageStatus());
        self::assertEquals(405, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
