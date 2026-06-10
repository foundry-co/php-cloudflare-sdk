<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DlpDatasetsCreate
{
	public function __construct(
		public ?DlpDatasetsCreateDataset $dataset = null,
		/** Encoding version to use for dataset. */
		public ?int $encodingVersion = null,
		public ?int $maxCells = null,
		/** The version to use when uploading the dataset. */
		public ?int $version = null,
		/**
		 * The secret to use for Exact Data Match datasets.
		 *
		 * This is not present in Custom Wordlists.
		 */
		public ?string $secret = null,
	) {
	}
}
