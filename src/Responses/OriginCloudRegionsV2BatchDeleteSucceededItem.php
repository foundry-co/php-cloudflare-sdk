<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Result for a single item in a batch operation.
 */
readonly class OriginCloudRegionsV2BatchDeleteSucceededItem
{
	public function __construct(
		/** The origin IP address for this item. */
		public ?string $originIp = null,
		/** Error message explaining why the item failed. Present only on failed items. */
		public ?string $error = null,
		/** Cloud vendor region identifier. Present on succeeded items (the new value for upsert, the deleted value for delete). */
		public ?string $region = null,
		/** Cloud vendor identifier. Present on succeeded items (the new value for upsert, the deleted value for delete). */
		public ?string $vendor = null,
	) {
	}
}
