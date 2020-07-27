<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class InternalServerException extends HttpException
{
    /**
     * InternalServerException constructor.
     * @param string $message
     * @param int $code = 500
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 500, Throwable $previous = null)
    {
        parent::__construct($message, 500, $previous);
    }
}
