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
use Jgut\HttpException\ConflictHttpException;
use PHPUnit\Framework\TestCase;

/**
 * HTTP 409 Conflict Exception tests.
 */
class ConflictHttpExceptionTest extends TestCase
{
    public function testException()
    {
        $exception = new ConflictHttpException();

        self::assertEquals('Conflict', $exception->getMessage());
        self::assertEquals('', $exception->getDescription());
        self::assertEquals(StatusCodeInterface::STATUS_CONFLICT, $exception->getCode());
        self::assertEquals(StatusCodeInterface::STATUS_CONFLICT, $exception->getStatusCode());
    }
}
