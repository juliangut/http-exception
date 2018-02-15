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
use Jgut\HttpException\BadRequestHttpException;
use PHPUnit\Framework\TestCase;

/**
 * HTTP 400 Bad Request Exception tests.
 */
class BadRequestHttpExceptionTest extends TestCase
{
    public function testException()
    {
        $exception = new BadRequestHttpException();

        self::assertEquals('Bad Request', $exception->getMessage());
        self::assertEquals('', $exception->getDescription());
        self::assertEquals(StatusCodeInterface::STATUS_BAD_REQUEST, $exception->getCode());
        self::assertEquals(StatusCodeInterface::STATUS_BAD_REQUEST, $exception->getStatusCode());
    }
}
