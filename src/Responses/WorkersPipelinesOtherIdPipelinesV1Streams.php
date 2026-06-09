<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkersPipelinesOtherIdPipelinesV1Streams
{
	public function __construct(
		public \DateTimeImmutable $createdAt,
		public WorkersPipelinesOtherIdPipelinesV1StreamsHttp $http,
		/** Indicates a unique identifier for this stream. */
		public string $id,
		public \DateTimeImmutable $modifiedAt,
		/** Indicates the name of the Stream. */
		public string $name,
		/** Indicates the current version of this stream. */
		public int $version,
		public WorkersPipelinesOtherIdPipelinesV1StreamsWorkerBinding $workerBinding,
		/** Indicates the endpoint URL of this stream. */
		public ?string $endpoint = null,
		public mixed $format = null,
		public ?WorkersPipelinesOtherIdPipelinesV1StreamsSchema $schema = null,
	) {
	}
}
