<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class ImATeapotExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\ImATeapotException('coucou');
        self::assertEquals('I\'m a teapot', $exception->getMessageStatus());
        self::assertEquals(418, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
