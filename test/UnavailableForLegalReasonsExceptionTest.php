<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class UnavailableForLegalReasonsExceptionTest extends TestCase
{

    /**
     * test de __construct
     **/
    public function testConstruct(): void
    {
        $exception = new \HttpException\UnavailableForLegalReasonsException('coucou');
        self::assertEquals('Unavailable For Legal Reasons', $exception->getMessageStatus());
        self::assertEquals(451, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
