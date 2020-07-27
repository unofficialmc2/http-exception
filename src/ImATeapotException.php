<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class ImATeapotException extends HttpException
{
    /**
     * ImATeapotException constructor.
     * @param string $message
     * @param int $code = 418
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 418, Throwable $previous = null)
    {
        parent::__construct($message, 418, $previous);
    }
}
