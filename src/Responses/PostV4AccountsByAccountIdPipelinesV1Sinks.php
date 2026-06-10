<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PostV4AccountsByAccountIdPipelinesV1Sinks
{
	public function __construct(
		public ?\DateTimeImmutable $createdAt = null,
		/** Indicates a unique identifier for this sink. */
		public ?string $id = null,
		public ?\DateTimeImmutable $modifiedAt = null,
		/** Defines the name of the Sink. */
		public ?string $name = null,
		/** Specifies the type of sink. */
		public ?\FoundryCo\Cloudflare\Enums\PostV4AccountsByAccountIdPipelinesV1SinksType $type = null,
		public mixed $config = null,
		public mixed $format = null,
		public ?PostV4AccountsByAccountIdPipelinesV1SinksSchema $schema = null,
	) {
	}
}
