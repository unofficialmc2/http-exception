<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class NetworkAuthenticationRequiredExceptionTest extends TestCase
{

    public function test__construct()
    {
        $exception = new \HttpException\NetworkAuthenticationRequiredException('coucou');
        self::assertEquals('Network authentication required', $exception->getMessageStatus());
        self::assertEquals(511, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
