<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class UpgradeRequiredException extends HttpException
{
    /**
     * UpgradeRequiredException constructor.
     * @param string $message
     * @param int $code = 426
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 426, Throwable $previous = null)
    {
        parent::__construct($message, 426, $previous);
    }
}
