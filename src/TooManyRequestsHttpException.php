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
 * HTTP 429 Too Many Requests Entity exception class.
 */
class TooManyRequestsHttpException extends HttpException
{
    /**
     * Too Many Requests Exception constructor.
     *
     * @param string|null     $message
     * @param string|null     $description
     * @param int|null        $code
     * @param \Throwable|null $previous
     */
    public function __construct(
        string $message = null,
        string $description = null,
        int $code = null,
        \Throwable $previous = null
    ) {
        parent::__construct(
            $message ?? 'Too Many Requests',
            $description ?? '',
            $code ?? StatusCodeInterface::STATUS_TOO_MANY_REQUESTS,
            StatusCodeInterface::STATUS_TOO_MANY_REQUESTS,
            $previous
        );
    }
}
