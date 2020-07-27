<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class VariantAlsoNegotiatesException extends HttpException
{
    /**
     * VariantAlsoNegotiatesException constructor.
     * @param string $message
     * @param int $code = 506
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 506, Throwable $previous = null)
    {
        parent::__construct($message, 506, $previous);
    }
}
