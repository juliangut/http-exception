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
 * HTTP 400 Bad Request exception class.
 */
class BadRequestHttpException extends HttpException
{
    /**
     * Bad Request Exception constructor.
     *
     * @param string          $message
     * @param string          $description
     * @param int             $code
     * @param \Throwable|null $previous
     */
    public function __construct(
        string $message = 'Bad Request',
        string $description = '',
        int $code = StatusCodeInterface::STATUS_BAD_REQUEST,
        \Throwable $previous = null
    ) {
        parent::__construct($message, $description, $code, $previous);

        $this->statusCode = StatusCodeInterface::STATUS_BAD_REQUEST;
    }
}
