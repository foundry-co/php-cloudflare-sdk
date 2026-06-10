<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetV4AccountsByAccountIdPipelinesV1PipelinesByPipelineId
{
	public function __construct(
		public ?string $createdAt = null,
		/** Indicates a unique identifier for this pipeline. */
		public ?string $id = null,
		public ?string $modifiedAt = null,
		/** Indicates the name of the Pipeline. */
		public ?string $name = null,
		/** Specifies SQL for the Pipeline processing flow. */
		public ?string $sql = null,
		/** Indicates the current status of the Pipeline. */
		public ?string $status = null,
		/** List of streams and sinks used by this pipeline. */
		public ?array $tables = null,
		/** Indicates the reason for the failure of the Pipeline. */
		public ?string $failureReason = null,
	) {
	}
}
