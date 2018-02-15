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
use Jgut\HttpException\NotAcceptableHttpException;
use PHPUnit\Framework\TestCase;

/**
 * HTTP 406 Not Acceptable Exception tests.
 */
class NotAcceptableHttpExceptionTest extends TestCase
{
    public function testException()
    {
        $exception = new NotAcceptableHttpException();

        self::assertEquals('Not Acceptable', $exception->getMessage());
        self::assertEquals('', $exception->getDescription());
        self::assertEquals(StatusCodeInterface::STATUS_NOT_ACCEPTABLE, $exception->getCode());
        self::assertEquals(StatusCodeInterface::STATUS_NOT_ACCEPTABLE, $exception->getStatusCode());
    }
}
