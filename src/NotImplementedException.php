<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class NotImplementedException extends HttpException
{
    /**
     * NotImplementedException constructor.
     * @param string $message
     * @param int $code = 501
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 501, Throwable $previous = null)
    {
        parent::__construct($message, 501, $previous);
    }
}
