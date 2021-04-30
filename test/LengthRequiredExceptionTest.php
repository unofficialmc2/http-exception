<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class LengthRequiredExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\LengthRequiredException('coucou');
        self::assertEquals('Length Required', $exception->getMessageStatus());
        self::assertEquals(411, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
