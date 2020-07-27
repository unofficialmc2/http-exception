<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class ForbiddenException extends HttpException
{
    /**
     * ForbiddenException constructor.
     * @param string $message
     * @param int $code = 403
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 403, Throwable $previous = null)
    {
        parent::__construct($message, 403, $previous);
    }
}
