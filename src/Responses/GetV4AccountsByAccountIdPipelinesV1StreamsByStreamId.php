<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetV4AccountsByAccountIdPipelinesV1StreamsByStreamId
{
	public function __construct(
		public ?\DateTimeImmutable $createdAt = null,
		public ?GetV4AccountsByAccountIdPipelinesV1StreamsByStreamIdHttp $http = null,
		/** Indicates a unique identifier for this stream. */
		public ?string $id = null,
		public ?\DateTimeImmutable $modifiedAt = null,
		/** Indicates the name of the Stream. */
		public ?string $name = null,
		/** Indicates the current version of this stream. */
		public ?int $version = null,
		public ?GetV4AccountsByAccountIdPipelinesV1StreamsByStreamIdWorkerBinding $workerBinding = null,
		/** Indicates the endpoint URL of this stream. */
		public ?string $endpoint = null,
		public mixed $format = null,
		public ?GetV4AccountsByAccountIdPipelinesV1StreamsByStreamIdSchema $schema = null,
	) {
	}
}
