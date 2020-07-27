<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class ExpectationFailedException extends HttpException
{
    /**
     * ExpectationFailedException constructor.
     * @param string $message
     * @param int $code = 417
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 417, Throwable $previous = null)
    {
        parent::__construct($message, 417, $previous);
    }
}
