<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class VariantAlsoNegotiatesExceptionTest extends TestCase
{

    public function test__construct()
    {
        $exception = new \HttpException\VariantAlsoNegotiatesException('coucou');
        self::assertEquals('Variant Also Negotiates', $exception->getMessageStatus());
        self::assertEquals(506, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
