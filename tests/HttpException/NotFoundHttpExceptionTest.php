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
use Jgut\HttpException\NotFoundHttpException;
use PHPUnit\Framework\TestCase;

/**
 * HTTP 404 Not Found Exception tests.
 */
class NotFoundHttpExceptionTest extends TestCase
{
    public function testException()
    {
        $exception = new NotFoundHttpException();

        self::assertEquals('Not Found', $exception->getMessage());
        self::assertEquals('', $exception->getDescription());
        self::assertEquals(StatusCodeInterface::STATUS_NOT_FOUND, $exception->getCode());
        self::assertEquals(StatusCodeInterface::STATUS_NOT_FOUND, $exception->getStatusCode());
    }
}
