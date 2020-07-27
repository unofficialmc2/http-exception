<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class RetryWithException extends HttpException
{
    /**
     * RetryWithException constructor.
     * @param string $message
     * @param int $code = 449
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 449, Throwable $previous = null)
    {
        parent::__construct($message, 449, $previous);
    }
}
