<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class RequestHeaderException extends HttpException
{
    /**
     * RequestHeaderException constructor.
     * @param string $message
     * @param int $code = 431
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 431, Throwable $previous = null)
    {
        parent::__construct($message, 431, $previous);
    }
}
