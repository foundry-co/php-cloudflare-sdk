<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Export D1 Database as SQL
 */
readonly class D1ExportDatabaseRequest
{
	public function __construct(
		/** Specifies that you will poll this endpoint until the export completes */
		public \FoundryCo\Cloudflare\Enums\D1ExportDatabaseRequestOutputFormat $outputFormat,
		/** To poll an in-progress export, provide the current bookmark (returned by your first polling response) */
		public ?string $currentBookmark = null,
		public ?\FoundryCo\Cloudflare\Responses\D1ExportDatabaseRequestDumpOptions $dumpOptions = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'output_format' => $this->outputFormat->value,
		    'current_bookmark' => $this->currentBookmark,
		    'dump_options' => $this->dumpOptions?->toArray(),
		], fn ($v) => $v !== null);
	}
}
