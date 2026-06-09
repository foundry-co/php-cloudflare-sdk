<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkersPipelinesOtherIdTablesItem
{
	public function __construct(
		/** Unique identifier for the connection (stream or sink). */
		public string $id,
		/** Latest available version of the connection. */
		public int $latest,
		/** Name of the connection. */
		public string $name,
		/** Type of the connection. */
		public \FoundryCo\Cloudflare\Enums\WorkersPipelinesOtherIdTablesItemType $type,
		/** Current version of the connection used by this pipeline. */
		public int $version,
	) {
	}
}
