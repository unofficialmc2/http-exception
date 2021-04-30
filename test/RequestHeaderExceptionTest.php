<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class RequestHeaderExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\RequestHeaderException('coucou');
        self::assertEquals('Request Header', $exception->getMessageStatus());
        self::assertEquals(431, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
