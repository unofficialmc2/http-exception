<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class UnauthorizedException extends HttpException
{
    /**
     * UnauthorizedException constructor.
     * @param string $message
     * @param int $code = 401
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 401, Throwable $previous = null)
    {
        parent::__construct($message, 401, $previous);
    }
}
