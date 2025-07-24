<?php

namespace Saleh7\Zatca\Exceptions;

use Exception;
use Throwable;

/**
 * Class ZatcaException
 *
 * Base exception class for ZATCA-related errors.
 */
class ZatcaException extends Exception
{
    /**
     * Additional contextual information for the exception.
     *
     * @var array
     */
    protected array $context = [];

    /**
     * Default message when none is provided.
     */
    protected string $defaultMessage = 'An error occurred';

    public function __construct(?string $message = null, array $context = [], int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message ?? $this->getDefaultMessage(), $code, $previous);
        $this->context = $context;
    }

    /**
     * Merge additional context into the exception.
     */
    public function withContext(array $context): self
    {
        $this->context = array_merge($this->context, $context);

        return $this;
    }

    /**
     * Retrieve the context array.
     */
    public function context(): array
    {
        return $this->context;
    }

    protected function getDefaultMessage(): string
    {
        return $this->defaultMessage;
    }
}
