<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DLPDatasetsCreate
{
	public function __construct(
		public DLPDatasetsCreateDataset $dataset,
		/** Encoding version to use for dataset. */
		public int $encodingVersion,
		public int $maxCells,
		/** The version to use when uploading the dataset. */
		public int $version,
		/**
		 * The secret to use for Exact Data Match datasets.
		 *
		 * This is not present in Custom Wordlists.
		 */
		public ?string $secret = null,
	) {
	}
}
