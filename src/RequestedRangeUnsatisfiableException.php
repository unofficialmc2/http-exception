<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class RequestedRangeUnsatisfiableException extends HttpException
{
    /**
     * RequestedRangeUnsatisfiableException constructor.
     * @param string $message
     * @param int $code = 416
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 416, Throwable $previous = null)
    {
        parent::__construct($message, 416, $previous);
    }
}
