<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class ProxyAuthenticationRequiredException extends HttpException
{
    /**
     * ProxyAuthenticationRequiredException constructor.
     * @param string $message
     * @param int $code = 407
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 407, Throwable $previous = null)
    {
        parent::__construct($message, 407, $previous);
    }
}
