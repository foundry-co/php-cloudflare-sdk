<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DLPSettingsGet
{
	public function __construct(
		/** Maximum number of custom regex entries allowed for the account. */
		public int $maxCustomRegexEntries,
		/** Maximum number of dataset cells allowed for the account, across all EDM and CWL datasets. */
		public int $maxDatasetCells,
		/** Maximum number of document fingerprints allowed for the account. */
		public int $maxDocumentFingerprints,
		/** Number of custom regex entries currently configured for the account. */
		public int $usedCustomRegexEntries,
		/** Number of dataset cells currently configured for the account, across all EDM and CWL datasets. Document fingerprints do not count towards this limit. */
		public int $usedDatasetCells,
		/** Number of document fingerprints currently configured for the account. */
		public int $usedDocumentFingerprints,
	) {
	}
}
