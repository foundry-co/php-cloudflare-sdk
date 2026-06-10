<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DlpLimitsGet
{
	public function __construct(
		/** Maximum number of custom regex entries allowed for the account. */
		public ?int $maxCustomRegexEntries = null,
		/** Maximum number of dataset cells allowed for the account, across all EDM and CWL datasets. */
		public ?int $maxDatasetCells = null,
		/** Maximum number of document fingerprints allowed for the account. */
		public ?int $maxDocumentFingerprints = null,
		/** Number of custom regex entries currently configured for the account. */
		public ?int $usedCustomRegexEntries = null,
		/** Number of dataset cells currently configured for the account, across all EDM and CWL datasets. Document fingerprints do not count towards this limit. */
		public ?int $usedDatasetCells = null,
		/** Number of document fingerprints currently configured for the account. */
		public ?int $usedDocumentFingerprints = null,
	) {
	}
}
