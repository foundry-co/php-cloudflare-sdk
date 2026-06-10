<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetV4AccountsByAccountIdPipelinesV1PipelinesByPipelineIdTablesItem
{
	public function __construct(
		/** Unique identifier for the connection (stream or sink). */
		public ?string $id = null,
		/** Latest available version of the connection. */
		public ?int $latest = null,
		/** Name of the connection. */
		public ?string $name = null,
		/** Type of the connection. */
		public ?\FoundryCo\Cloudflare\Enums\GetV4AccountsByAccountIdPipelinesV1PipelinesByPipelineIdTablesItemType $type = null,
		/** Current version of the connection used by this pipeline. */
		public ?int $version = null,
	) {
	}
}
