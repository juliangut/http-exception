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
 * HTTP 410 Gone exception class.
 */
class GoneHttpException extends HttpException
{
    /**
     * Gone Exception constructor.
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
            $message ?? 'Gone',
            $description ?? '',
            $code ?? StatusCodeInterface::STATUS_GONE,
            StatusCodeInterface::STATUS_GONE,
            $previous
        );
    }
}
