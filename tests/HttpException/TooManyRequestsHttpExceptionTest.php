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
use Jgut\HttpException\TooManyRequestsHttpException;
use PHPUnit\Framework\TestCase;

/**
 * HTTP 429 Too Many Requests Exception tests.
 */
class TooManyRequestsHttpExceptionTest extends TestCase
{
    public function testException()
    {
        $exception = new TooManyRequestsHttpException();

        self::assertEquals('Too Many Requests', $exception->getMessage());
        self::assertEquals('', $exception->getDescription());
        self::assertEquals(StatusCodeInterface::STATUS_TOO_MANY_REQUESTS, $exception->getCode());
        self::assertEquals(StatusCodeInterface::STATUS_TOO_MANY_REQUESTS, $exception->getStatusCode());
    }
}
