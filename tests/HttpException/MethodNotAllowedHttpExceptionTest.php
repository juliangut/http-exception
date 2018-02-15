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
use Jgut\HttpException\MethodNotAllowedHttpException;
use PHPUnit\Framework\TestCase;

/**
 * HTTP 45 Method Not Allowed Exception tests.
 */
class MethodNotAllowedHttpExceptionTest extends TestCase
{
    public function testException()
    {
        $exception = new MethodNotAllowedHttpException();
        $exception->setValidMethods(['GET', 'POST']);

        self::assertEquals('Method Not Allowed', $exception->getMessage());
        self::assertEquals('', $exception->getDescription());
        self::assertEquals(StatusCodeInterface::STATUS_METHOD_NOT_ALLOWED, $exception->getCode());
        self::assertEquals(StatusCodeInterface::STATUS_METHOD_NOT_ALLOWED, $exception->getStatusCode());
        self::assertSame(['GET', 'POST'], $exception->getValidMethods());
    }
}
