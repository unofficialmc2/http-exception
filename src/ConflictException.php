<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class ConflictException extends HttpException
{
    /**
     * ConflictException constructor.
     * @param string $message
     * @param int $code = 409
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 409, Throwable $previous = null)
    {
        parent::__construct($message, 409, $previous);
    }
}
