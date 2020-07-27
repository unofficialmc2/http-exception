<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class ServiceUnavailableException extends HttpException
{
    /**
     * ServiceUnavailableException constructor.
     * @param string $message
     * @param int $code = 503
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 503, Throwable $previous = null)
    {
        parent::__construct($message, 503, $previous);
    }
}
