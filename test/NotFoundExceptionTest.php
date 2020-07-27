<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class NotFoundExceptionTest extends TestCase
{

    public function test__construct()
    {
        $exception = new \HttpException\NotFoundException('coucou');
        self::assertEquals('Not Found', $exception->getMessageStatus());
        self::assertEquals(404, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
