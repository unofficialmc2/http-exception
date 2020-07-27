<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class RequestTimeOutException extends HttpException
{
    /**
     * RequestTimeOutException constructor.
     * @param string $message
     * @param int $code = 408
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 408, Throwable $previous = null)
    {
        parent::__construct($message, 408, $previous);
    }
}
