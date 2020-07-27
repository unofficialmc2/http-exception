<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class HttpVersionNotSupportedException extends HttpException
{
    /**
     * HttpVersionNotSupportedException constructor.
     * @param string $message
     * @param int $code = 505
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 505, Throwable $previous = null)
    {
        parent::__construct($message, 505, $previous);
    }
}
