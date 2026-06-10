<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PostV4AccountsByAccountIdPipelinesV1Streams
{
	public function __construct(
		public ?\DateTimeImmutable $createdAt = null,
		public ?PostV4AccountsByAccountIdPipelinesV1StreamsHttp $http = null,
		/** Indicates a unique identifier for this stream. */
		public ?string $id = null,
		public ?\DateTimeImmutable $modifiedAt = null,
		/** Indicates the name of the Stream. */
		public ?string $name = null,
		/** Indicates the current version of this stream. */
		public ?int $version = null,
		public ?PostV4AccountsByAccountIdPipelinesV1StreamsWorkerBinding $workerBinding = null,
		/** Indicates the endpoint URL of this stream. */
		public ?string $endpoint = null,
		public mixed $format = null,
		public ?PostV4AccountsByAccountIdPipelinesV1StreamsSchema $schema = null,
	) {
	}
}
