<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class VariantAlsoNegotiatesExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\VariantAlsoNegotiatesException('coucou');
        self::assertEquals('Variant Also Negotiates', $exception->getMessageStatus());
        self::assertEquals(506, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
