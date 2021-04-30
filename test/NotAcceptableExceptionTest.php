<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class NotAcceptableExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\NotAcceptableException('coucou');
        self::assertEquals('Not Acceptable', $exception->getMessageStatus());
        self::assertEquals(406, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
