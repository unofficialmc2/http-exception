<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class NetworkAuthenticationRequiredExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\NetworkAuthenticationRequiredException('coucou');
        self::assertEquals('Network authentication required', $exception->getMessageStatus());
        self::assertEquals(511, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
