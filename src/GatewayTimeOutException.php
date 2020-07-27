<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class GatewayTimeOutException extends HttpException
{
    /**
     * GatewayTimeOutException constructor.
     * @param string $message
     * @param int $code = 504
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 504, Throwable $previous = null)
    {
        parent::__construct($message, 504, $previous);
    }
}
