<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class BlockedByWindowsParentalControlsExceptionTest extends TestCase
{

    public function test__construct()
    {
        $exception = new \HttpException\BlockedByWindowsParentalControlsException('coucou');
        self::assertEquals('Blocked by Windows Parental Controls', $exception->getMessageStatus());
        self::assertEquals(450, $exception->getCode());
        self::assertEquals('coucou', $exception->getMessage());
    }
}
