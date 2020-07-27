<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class NotExtendedException extends HttpException
{
    /**
     * NotExtendedException constructor.
     * @param string $message
     * @param int $code = 510
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 510, Throwable $previous = null)
    {
        parent::__construct($message, 510, $previous);
    }
}
