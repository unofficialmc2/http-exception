<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class BandwidthLimitExceededExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\BandwidthLimitExceededException('coucou');
        self::assertEquals('Bandwidth Limit Exceeded', $exception->getMessageStatus());
        self::assertEquals(509, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
