<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class NetworkAuthenticationRequiredException extends HttpException
{
    /**
     * NetworkAuthenticationRequiredException constructor.
     * @param string $message
     * @param int $code = 511
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 511, Throwable $previous = null)
    {
        parent::__construct($message, 511, $previous);
    }
}
