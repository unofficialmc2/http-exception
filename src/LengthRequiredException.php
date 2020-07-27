<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class LengthRequiredException extends HttpException
{
    /**
     * LengthRequiredException constructor.
     * @param string $message
     * @param int $code = 411
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 411, Throwable $previous = null)
    {
        parent::__construct($message, 411, $previous);
    }
}
