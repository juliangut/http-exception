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
use Jgut\HttpException\UnauthorizedHttpException;
use PHPUnit\Framework\TestCase;

/**
 * HTTP 401 Unauthorized Exception tests.
 */
class UnauthorizedHttpExceptionTest extends TestCase
{
    public function testException()
    {
        $exception = new UnauthorizedHttpException();

        self::assertEquals('Unauthorized', $exception->getMessage());
        self::assertEquals('', $exception->getDescription());
        self::assertEquals(StatusCodeInterface::STATUS_UNAUTHORIZED, $exception->getCode());
        self::assertEquals(StatusCodeInterface::STATUS_UNAUTHORIZED, $exception->getStatusCode());
    }
}
