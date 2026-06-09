<?php

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Exceptions;

use RuntimeException;

class CloudflareException extends RuntimeException
{
    /** @param array<array{code: int, message: string}> $errors */
    public function __construct(
        string $message,
        public readonly int $statusCode,
        public readonly array $errors = [],
    ) {
        parent::__construct($message, $statusCode);
    }

    public static function fromResponse(int $status, array $body): static
    {
        $errors = $body['errors'] ?? [];
        $message = !empty($errors)
            ? implode('; ', array_column($errors, 'message'))
            : "Cloudflare API error (HTTP {$status})";

        return new static($message, $status, $errors);
    }
}
