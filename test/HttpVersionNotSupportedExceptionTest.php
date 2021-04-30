<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class HttpVersionNotSupportedExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\HttpVersionNotSupportedException('coucou');
        self::assertEquals('HTTP Version not supported', $exception->getMessageStatus());
        self::assertEquals(505, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
