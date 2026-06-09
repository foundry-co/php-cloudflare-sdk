<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkersPipelinesOtherId
{
	public function __construct(
		public string $createdAt,
		/** Indicates a unique identifier for this pipeline. */
		public string $id,
		public string $modifiedAt,
		/** Indicates the name of the Pipeline. */
		public string $name,
		/** Specifies SQL for the Pipeline processing flow. */
		public string $sql,
		/** Indicates the current status of the Pipeline. */
		public string $status,
		/** List of streams and sinks used by this pipeline. */
		public array $tables,
		/** Indicates the reason for the failure of the Pipeline. */
		public ?string $failureReason = null,
	) {
	}
}
