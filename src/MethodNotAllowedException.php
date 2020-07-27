<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class MethodNotAllowedException extends HttpException
{
    /**
     * MethodNotAllowedException constructor.
     * @param string $message
     * @param int $code = 405
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 405, Throwable $previous = null)
    {
        parent::__construct($message, 405, $previous);
    }
}
