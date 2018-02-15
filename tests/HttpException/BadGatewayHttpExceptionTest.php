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
use Jgut\HttpException\BadGatewayHttpException;
use PHPUnit\Framework\TestCase;

/**
 * HTTP 502 Bad Gateway Exception tests.
 */
class BadGatewayHttpExceptionTest extends TestCase
{
    public function testException()
    {
        $exception = new BadGatewayHttpException();

        self::assertEquals('Bad Gateway', $exception->getMessage());
        self::assertEquals('', $exception->getDescription());
        self::assertEquals(StatusCodeInterface::STATUS_BAD_GATEWAY, $exception->getCode());
        self::assertEquals(StatusCodeInterface::STATUS_BAD_GATEWAY, $exception->getStatusCode());
    }
}
