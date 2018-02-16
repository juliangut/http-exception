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
use Jgut\HttpException\HttpException;
use PHPUnit\Framework\TestCase;

/**
 * HTTP Exception tests.
 */
class HttpExceptionTest extends TestCase
{
    /**
     * @expectedException \RuntimeException
     * @expectedExceptionMessage 200 is not a valid HTTP error status code
     */
    public function testInvalidStatusCode()
    {
        new HttpException(
            'message',
            'description',
            1000,
            StatusCodeInterface::STATUS_OK
        );
    }

    public function testException()
    {
        $previous = new \Exception('previous');

        $exception = new HttpException(
            'message',
            'description',
            1000,
            StatusCodeInterface::STATUS_BAD_REQUEST,
            $previous
        );

        self::assertNotNull($exception->getIdentifier());
        self::assertSame('message', $exception->getMessage());
        self::assertSame('description', $exception->getDescription());
        self::assertSame(1000, $exception->getCode());
        self::assertSame(StatusCodeInterface::STATUS_BAD_REQUEST, $exception->getStatusCode());
        self::assertSame($previous, $exception->getPrevious());
    }
}
