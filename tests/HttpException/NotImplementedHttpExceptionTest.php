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
use Jgut\HttpException\NotImplementedHttpException;
use PHPUnit\Framework\TestCase;

/**
 * HTTP 501 Not Implemented Exception tests.
 */
class NotImplementedHttpExceptionTest extends TestCase
{
    public function testException()
    {
        $exception = new NotImplementedHttpException();

        self::assertEquals('Not Implemented', $exception->getMessage());
        self::assertEquals('', $exception->getDescription());
        self::assertEquals(StatusCodeInterface::STATUS_NOT_IMPLEMENTED, $exception->getCode());
        self::assertEquals(StatusCodeInterface::STATUS_NOT_IMPLEMENTED, $exception->getStatusCode());
    }
}
