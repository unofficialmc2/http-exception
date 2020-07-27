<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class UnsupportedMediaTypeException extends HttpException
{
    /**
     * UnsupportedMediaTypeException constructor.
     * @param string $message
     * @param int $code = 415
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 415, Throwable $previous = null)
    {
        parent::__construct($message, 415, $previous);
    }
}
