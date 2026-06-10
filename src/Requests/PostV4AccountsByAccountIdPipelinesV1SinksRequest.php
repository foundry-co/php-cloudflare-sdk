<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Sink
 */
readonly class PostV4AccountsByAccountIdPipelinesV1SinksRequest
{
	public function __construct(
		/** Defines the name of the Sink. */
		public string $name,
		/** Specifies the type of sink. */
		public \FoundryCo\Cloudflare\Enums\PostV4AccountsByAccountIdPipelinesV1SinksRequestType $type,
		/** Defines the configuration of the R2 Sink. */
		public mixed $config = null,
		public mixed $format = null,
		public ?\FoundryCo\Cloudflare\Responses\PostV4AccountsByAccountIdPipelinesV1SinksRequestSchema $schema = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'type' => $this->type->value,
		    'config' => $this->config,
		    'format' => $this->format,
		    'schema' => $this->schema?->toArray(),
		], fn ($v) => $v !== null);
	}
}
