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
use Jgut\HttpException\UnprocessableEntityHttpException;
use PHPUnit\Framework\TestCase;

/**
 * HTTP 422 Unprocessable Entity Exception tests.
 */
class UnprocessableEntityHttpExceptionTest extends TestCase
{
    public function testException()
    {
        $exception = new UnprocessableEntityHttpException();

        self::assertEquals('Unprocessable Entity', $exception->getMessage());
        self::assertEquals('', $exception->getDescription());
        self::assertEquals(StatusCodeInterface::STATUS_UNPROCESSABLE_ENTITY, $exception->getCode());
        self::assertEquals(StatusCodeInterface::STATUS_UNPROCESSABLE_ENTITY, $exception->getStatusCode());
    }
}
