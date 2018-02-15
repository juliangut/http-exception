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
use Jgut\HttpException\Tests\Stubs\HttpExceptionStub;
use PHPUnit\Framework\TestCase;

/**
 * HTTP Exception tests.
 */
class HttpExceptionTest extends TestCase
{
    public function testException()
    {
        $previous = new \Exception('previous');

        $exception = new HttpExceptionStub('message', 'description', 1000, $previous);

        self::assertNotNull($exception->getIdentifier());
        self::assertSame('message', $exception->getMessage());
        self::assertSame('description', $exception->getDescription());
        self::assertSame(1000, $exception->getCode());
        self::assertSame(StatusCodeInterface::STATUS_BAD_REQUEST, $exception->getStatusCode());
        self::assertSame($previous, $exception->getPrevious());
    }
}
