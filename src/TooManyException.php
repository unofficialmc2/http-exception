<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class TooManyException extends HttpException
{
    /**
     * TooManyException constructor.
     * @param string $message
     * @param int $code = 429
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 429, Throwable $previous = null)
    {
        parent::__construct($message, 429, $previous);
    }
}
