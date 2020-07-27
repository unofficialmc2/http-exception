<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class UpgradeRequiredExceptionTest extends TestCase
{

    public function test__construct()
    {
        $exception = new \HttpException\UpgradeRequiredException('coucou');
        self::assertEquals('Upgrade Required', $exception->getMessageStatus());
        self::assertEquals(426, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
