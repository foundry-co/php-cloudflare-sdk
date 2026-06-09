<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkersPipelinesOtherIdPipelinesV1Pipelines
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
	) {
	}
}
