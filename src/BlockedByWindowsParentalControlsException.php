<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class BlockedByWindowsParentalControlsException extends HttpException
{
    /**
     * BlockedByWindowsParentalControlsException constructor.
     * @param string $message
     * @param int $code = 450
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 450, Throwable $previous = null)
    {
        parent::__construct($message, 450, $previous);
    }
}
