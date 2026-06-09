<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DNSRecordsForAZoneRecord
{
	public function __construct(
		/** When the record was created. */
		public \DateTimeImmutable $createdOn,
		/** Identifier. */
		public string $id,
		/** Extra Cloudflare-specific information about the record. */
		public array $meta,
		/** When the record was last modified. */
		public \DateTimeImmutable $modifiedOn,
		/** Whether the record can be proxied by Cloudflare or not. */
		public bool $proxiable,
		/** When the record comment was last modified. Omitted if there is no comment. */
		public ?\DateTimeImmutable $commentModifiedOn = null,
		/** When the record tags were last modified. Omitted if there are no tags. */
		public ?\DateTimeImmutable $tagsModifiedOn = null,
	) {
	}
}
