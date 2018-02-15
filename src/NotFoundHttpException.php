<?php

/*
 * http-exception (https://github.com/juliangut/http-exception).
 * HTTP aware exceptions.
 *
 * @license BSD-3-Clause
 * @link https://github.com/juliangut/http-exception
 * @author Julián Gutiérrez <juliangut@gmail.com>
 */

declare(strict_types=1);

namespace Jgut\HttpException;

use Fig\Http\Message\StatusCodeInterface;

/**
 * HTTP 404 Not Found exception class.
 */
class NotFoundHttpException extends HttpException
{
    /**
     * Not Found Exception constructor.
     *
     * @param string          $message
     * @param string          $description
     * @param int             $code
     * @param \Throwable|null $previous
     */
    public function __construct(
        string $message = 'Not Found',
        string $description = '',
        int $code = StatusCodeInterface::STATUS_NOT_FOUND,
        \Throwable $previous = null
    ) {
        parent::__construct($message, $description, $code, $previous);

        $this->statusCode = StatusCodeInterface::STATUS_NOT_FOUND;
    }
}
