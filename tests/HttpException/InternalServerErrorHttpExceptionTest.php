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
use Jgut\HttpException\InternalServerErrorHttpException;
use PHPUnit\Framework\TestCase;

/**
 * HTTP 500 Internal Server Error Exception tests.
 */
class InternalServerErrorHttpExceptionTest extends TestCase
{
    public function testException()
    {
        $exception = new InternalServerErrorHttpException();

        self::assertEquals('Internal Server Error', $exception->getMessage());
        self::assertEquals('', $exception->getDescription());
        self::assertEquals(StatusCodeInterface::STATUS_INTERNAL_SERVER_ERROR, $exception->getCode());
        self::assertEquals(StatusCodeInterface::STATUS_INTERNAL_SERVER_ERROR, $exception->getStatusCode());
    }
}
