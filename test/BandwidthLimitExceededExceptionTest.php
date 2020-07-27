<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class BandwidthLimitExceededExceptionTest extends TestCase
{

    public function test__construct()
    {
        $exception = new \HttpException\BandwidthLimitExceededException('coucou');
        self::assertEquals('Bandwidth Limit Exceeded', $exception->getMessageStatus());
        self::assertEquals(509, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
