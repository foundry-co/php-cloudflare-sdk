<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkersPipelinesOtherIdPipelinesV1Sinks
{
	public function __construct(
		public \DateTimeImmutable $createdAt,
		/** Indicates a unique identifier for this sink. */
		public string $id,
		public \DateTimeImmutable $modifiedAt,
		/** Defines the name of the Sink. */
		public string $name,
		/** Specifies the type of sink. */
		public \FoundryCo\Cloudflare\Enums\WorkersPipelinesOtherIdPipelinesV1SinksType $type,
		/** Defines the configuration of the R2 Sink. */
		public mixed $config = null,
		public mixed $format = null,
		public ?WorkersPipelinesOtherIdPipelinesV1SinksSchema $schema = null,
	) {
	}
}
