<?php

declare(strict_types=1);

namespace Moon\HttpMiddleware\Exception;

use Throwable;

class InvalidArgumentException extends \InvalidArgumentException
{
    /**
     * @var mixed|null
     */
    private $invalidMiddleware;

    /**
     * InvalidArgumentException constructor.
     * @param string $message
     * @param mixed|null $invalidMiddleware
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = '', $invalidMiddleware = null, $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->invalidMiddleware = $invalidMiddleware;
    }

    /**
     * Return the invalid middleware
     *
     * @return mixed|null
     */
    public function getInvalidMiddleware()
    {
        return $this->invalidMiddleware;
    }
}