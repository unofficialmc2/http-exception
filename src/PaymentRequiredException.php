<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class PaymentRequiredException extends HttpException
{
    /**
     * PaymentRequiredException constructor.
     * @param string $message
     * @param int $code = 402
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 402, Throwable $previous = null)
    {
        parent::__construct($message, 402, $previous);
    }
}
