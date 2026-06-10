<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PostV4AccountsByAccountIdPipelinesV1Pipelines
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
	) {
	}
}
