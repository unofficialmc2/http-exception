<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class GoneException extends HttpException
{
    /**
     * GoneException constructor.
     * @param string $message
     * @param int $code = 410
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 410, Throwable $previous = null)
    {
        parent::__construct($message, 410, $previous);
    }
}
