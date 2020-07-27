<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class PreconditionRequiredException extends HttpException
{
    /**
     * PreconditionRequiredException constructor.
     * @param string $message
     * @param int $code = 428
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 428, Throwable $previous = null)
    {
        parent::__construct($message, 428, $previous);
    }
}
