<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class UpgradeRequiredExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\UpgradeRequiredException('coucou');
        self::assertEquals('Upgrade Required', $exception->getMessageStatus());
        self::assertEquals(426, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
