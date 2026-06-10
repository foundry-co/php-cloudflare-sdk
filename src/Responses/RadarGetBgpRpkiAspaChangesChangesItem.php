<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetBgpRpkiAspaChangesChangesItem
{
	public function __construct(
		/** Number of new ASPA objects created. */
		public ?int $customersAdded = null,
		/** Number of ASPA objects deleted. */
		public ?int $customersRemoved = null,
		/** Date of the changes in ISO 8601 format. */
		public ?\DateTimeImmutable $date = null,
		public ?array $entries = null,
		/** Number of providers added to existing objects. */
		public ?int $providersAdded = null,
		/** Number of providers removed from existing objects. */
		public ?int $providersRemoved = null,
		/** Running total of active ASPA objects after this day. */
		public ?int $totalCount = null,
	) {
	}
}
