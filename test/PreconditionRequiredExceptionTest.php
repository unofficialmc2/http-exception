<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class PreconditionRequiredExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\PreconditionRequiredException('coucou');
        self::assertEquals('Precondition Required', $exception->getMessageStatus());
        self::assertEquals(428, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
