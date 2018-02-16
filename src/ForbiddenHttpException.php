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
 * HTTP 403 Forbidden exception class.
 */
class ForbiddenHttpException extends HttpException
{
    /**
     * Forbidden Exception constructor.
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
            $message ?? 'Forbidden',
            $description ?? '',
            $code ?? StatusCodeInterface::STATUS_FORBIDDEN,
            StatusCodeInterface::STATUS_FORBIDDEN,
            $previous
        );
    }
}
