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

/**
 * HTTP 405 Method Not Allowed exception class.
 */
class MethodNotAllowedHttpException extends HttpException
{
    /**
     * Valid HTTP methods.
     *
     * @var array
     */
    protected $validMethods = [];

    /**
     * Method Not Allowed Exception constructor.
     *
     * @param string          $message
     * @param string          $description
     * @param int             $code
     * @param \Throwable|null $previous
     */
    public function __construct(
        string $message = 'Method Not Allowed',
        string $description = '',
        int $code = StatusCodeInterface::STATUS_METHOD_NOT_ALLOWED,
        \Throwable $previous = null
    ) {
        parent::__construct($message, $description, $code, $previous);

        $this->statusCode = StatusCodeInterface::STATUS_METHOD_NOT_ALLOWED;
    }

    /**
     * Set valid HTTP methods.
     *
     * @param array $validMethods
     *
     * @return static
     */
    public function setValidMethods(array $validMethods): self
    {
        $this->validMethods = $validMethods;

        return $this;
    }

    /**
     * Get valid HTTP methods.
     *
     * @return array
     */
    public function getValidMethods(): array
    {
        return $this->validMethods;
    }
}
