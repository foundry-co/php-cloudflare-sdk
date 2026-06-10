<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * List of records needed to enable an Email Routing zone.
 */
readonly class EmailSendingSubdomainsPreviewSendingSubdomainRecordsItem
{
	public function __construct(
		/** DNS record content. */
		public ?string $content = null,
		/** DNS record name (or @ for the zone apex). */
		public ?string $name = null,
		/** Required for MX, SRV and URI records. Unused by other record types. Records with lower priorities are preferred. */
		public ?float $priority = null,
		/** Time to live, in seconds, of the DNS record. Must be between 60 and 86400, or 1 for 'automatic'. */
		public mixed $ttl = null,
		/** DNS record type. */
		public ?\FoundryCo\Cloudflare\Enums\EmailSendingSubdomainsPreviewSendingSubdomainRecordsItemType $type = null,
	) {
	}
}
