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
 * HTTP 415 Unsupported Media Type exception class.
 */
class UnsupportedMediaTypeHttpException extends HttpException
{
    /**
     * Unsupported Media Type Exception constructor.
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
            $message ?? 'Unsupported Media Type',
            $description ?? '',
            $code ?? StatusCodeInterface::STATUS_UNSUPPORTED_MEDIA_TYPE,
            StatusCodeInterface::STATUS_UNSUPPORTED_MEDIA_TYPE,
            $previous
        );
    }
}
