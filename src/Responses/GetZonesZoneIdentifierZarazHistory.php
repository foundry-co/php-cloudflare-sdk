<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetZonesZoneIdentifierZarazHistory
{
	public function __construct(
		/** Date and time the configuration was created. */
		public ?\DateTimeImmutable $createdAt = null,
		/** ID of the configuration. */
		public ?int $id = null,
		/** Date and time the configuration was last updated. */
		public ?\DateTimeImmutable $updatedAt = null,
		/** Alpha-numeric ID of the account user who published the configuration. */
		public ?string $userId = null,
		/** Configuration description provided by the user who published this configuration. */
		public ?string $description = null,
	) {
	}
}
