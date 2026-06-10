<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetV4AccountsByAccountIdPipelinesV1Sinks
{
	public function __construct(
		public ?\DateTimeImmutable $createdAt = null,
		/** Indicates a unique identifier for this sink. */
		public ?string $id = null,
		public ?\DateTimeImmutable $modifiedAt = null,
		/** Defines the name of the Sink. */
		public ?string $name = null,
		/** Specifies the type of sink. */
		public ?\FoundryCo\Cloudflare\Enums\GetV4AccountsByAccountIdPipelinesV1SinksType $type = null,
		/** Defines the configuration of the R2 Sink. */
		public mixed $config = null,
		public mixed $format = null,
		public ?GetV4AccountsByAccountIdPipelinesV1SinksSchema $schema = null,
	) {
	}
}
