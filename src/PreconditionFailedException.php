<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class PreconditionFailedException extends HttpException
{
    /**
     * PreconditionFailedException constructor.
     * @param string $message
     * @param int $code = 412
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 412, Throwable $previous = null)
    {
        parent::__construct($message, 412, $previous);
    }
}
