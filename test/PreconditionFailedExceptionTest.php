<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class PreconditionFailedExceptionTest extends TestCase
{

    public function test__construct()
    {
        $exception = new \HttpException\PreconditionFailedException('coucou');
        self::assertEquals('Precondition Failed', $exception->getMessageStatus());
        self::assertEquals(412, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
