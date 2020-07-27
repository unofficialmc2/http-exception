<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class BadGatewayException extends HttpException
{
    /**
     * BadGatewayException constructor.
     * @param string $message
     * @param int $code = 502
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 502, Throwable $previous = null)
    {
        parent::__construct($message, 502, $previous);
    }
}
