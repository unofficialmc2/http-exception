<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class NotFoundExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\NotFoundException('coucou');
        self::assertEquals('Not Found', $exception->getMessageStatus());
        self::assertEquals(404, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
