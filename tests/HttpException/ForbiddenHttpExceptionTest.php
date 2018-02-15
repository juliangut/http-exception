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
use Jgut\HttpException\ForbiddenHttpException;
use PHPUnit\Framework\TestCase;

/**
 * HTTP 403 Forbidden Exception tests.
 */
class ForbiddenHttpExceptionTest extends TestCase
{
    public function testException()
    {
        $exception = new ForbiddenHttpException();

        self::assertEquals('Forbidden', $exception->getMessage());
        self::assertEquals('', $exception->getDescription());
        self::assertEquals(StatusCodeInterface::STATUS_FORBIDDEN, $exception->getCode());
        self::assertEquals(StatusCodeInterface::STATUS_FORBIDDEN, $exception->getStatusCode());
    }
}
