<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class RequestUriTooLongException extends HttpException
{
    /**
     * RequestUriTooLongException constructor.
     * @param string $message
     * @param int $code = 414
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 414, Throwable $previous = null)
    {
        parent::__construct($message, 414, $previous);
    }
}
