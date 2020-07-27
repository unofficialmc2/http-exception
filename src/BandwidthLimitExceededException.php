<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class BandwidthLimitExceededException extends HttpException
{
    /**
     * BandwidthLimitExceededException constructor.
     * @param string $message
     * @param int $code = 509
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 509, Throwable $previous = null)
    {
        parent::__construct($message, 509, $previous);
    }
}
