<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class ProxyAuthenticationRequiredExceptionTest extends TestCase
{

    public function test__construct()
    {
        $exception = new \HttpException\ProxyAuthenticationRequiredException('coucou');
        self::assertEquals('Proxy Authentication Required', $exception->getMessageStatus());
        self::assertEquals(407, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
