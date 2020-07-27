<?php
declare(strict_types=1);

namespace HttpException;

use Throwable;

/**
 * Class ContinueException
 * @package HttpException
 */
class NotFoundException extends HttpException
{
    /**
     * NotFoundException constructor.
     * @param string $message
     * @param int $code = 404
     * @param \Throwable|null $previous
     * @noinspection PhpUnusedParameterInspection
     */
    public function __construct($message = "", $code = 404, Throwable $previous = null)
    {
        parent::__construct($message, 404, $previous);
    }
}
