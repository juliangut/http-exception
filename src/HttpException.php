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

namespace Jgut\HttpException;

use Fig\Http\Message\StatusCodeInterface;
use PascalDeVink\ShortUuid\ShortUuid;

/**
 * HTTP exception class.
 */
abstract class HttpException extends \DomainException
{
    /**
     * Unique error identifier.
     *
     * @var string
     */
    protected $identifier;

    /**
     * Exception description.
     *
     * @var string
     */
    protected $description;

    /**
     * HTTP status code.
     *
     * @var int
     */
    protected $statusCode = StatusCodeInterface::STATUS_BAD_REQUEST;

    /**
     * HTTP Exception constructor.
     *
     * @param string          $message
     * @param string          $description
     * @param int             $code
     * @param \Throwable|null $previous
     */
    public function __construct(
        string $message,
        string $description,
        int $code,
        \Throwable $previous = null
    ) {
        parent::__construct(\trim($message), $code, $previous);

        $this->identifier = ShortUuid::uuid4();
        $this->description = \trim($description);
    }

    /**
     * Get exception unique identifier.
     *
     * @return string
     */
    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    /**
     * Get exception description.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Get HTTP status code.
     *
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}
