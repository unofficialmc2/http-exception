<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class BadGatewayExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\BadGatewayException('coucou');
        self::assertEquals('Bad Gateway', $exception->getMessageStatus());
        self::assertEquals(502, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
