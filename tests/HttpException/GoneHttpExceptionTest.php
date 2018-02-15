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
use Jgut\HttpException\GoneHttpException;
use PHPUnit\Framework\TestCase;

/**
 * HTTP 410 Gone Exception tests.
 */
class GoneHttpExceptionTest extends TestCase
{
    public function testException()
    {
        $exception = new GoneHttpException();

        self::assertEquals('Gone', $exception->getMessage());
        self::assertEquals('', $exception->getDescription());
        self::assertEquals(StatusCodeInterface::STATUS_GONE, $exception->getCode());
        self::assertEquals(StatusCodeInterface::STATUS_GONE, $exception->getStatusCode());
    }
}
