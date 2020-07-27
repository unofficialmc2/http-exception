<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class BadRequestException extends HttpException
{
    /**
     * BadRequestException constructor.
     * @param string $message
     * @param int $code = 400
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 400, Throwable $previous = null)
    {
        parent::__construct($message, 400, $previous);
    }
}
