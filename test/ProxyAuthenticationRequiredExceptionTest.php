<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class ProxyAuthenticationRequiredExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\ProxyAuthenticationRequiredException('coucou');
        self::assertEquals('Proxy Authentication Required', $exception->getMessageStatus());
        self::assertEquals(407, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
