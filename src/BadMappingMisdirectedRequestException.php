<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class BadMappingMisdirectedRequestException extends HttpException
{
    /**
     * BadMappingMisdirectedRequestException constructor.
     * @param string $message
     * @param int $code = 421
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 421, Throwable $previous = null)
    {
        parent::__construct($message, 421, $previous);
    }
}
