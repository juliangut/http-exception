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

namespace Jgut\HttpException\Tests;

use Fig\Http\Message\StatusCodeInterface;
use Jgut\HttpException\UnsupportedMediaTypeHttpException;
use PHPUnit\Framework\TestCase;

/**
 * HTTP 415 Unsupported Media Type Exception tests.
 */
class UnsupportedMediaTypeHttpExceptionTest extends TestCase
{
    public function testException()
    {
        $exception = new UnsupportedMediaTypeHttpException();

        self::assertEquals('Unsupported Media Type', $exception->getMessage());
        self::assertEquals('', $exception->getDescription());
        self::assertEquals(StatusCodeInterface::STATUS_UNSUPPORTED_MEDIA_TYPE, $exception->getCode());
        self::assertEquals(StatusCodeInterface::STATUS_UNSUPPORTED_MEDIA_TYPE, $exception->getStatusCode());
    }
}
