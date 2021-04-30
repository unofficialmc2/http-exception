<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class ExpectationFailedExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\ExpectationFailedException('coucou');
        self::assertEquals('Expectation failed', $exception->getMessageStatus());
        self::assertEquals(417, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
