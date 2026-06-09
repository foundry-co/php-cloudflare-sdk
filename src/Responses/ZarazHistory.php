<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZarazHistory
{
	public function __construct(
		/** Date and time the configuration was created. */
		public \DateTimeImmutable $createdAt,
		/** ID of the configuration. */
		public int $id,
		/** Date and time the configuration was last updated. */
		public \DateTimeImmutable $updatedAt,
		/** Alpha-numeric ID of the account user who published the configuration. */
		public string $userId,
		/** Configuration description provided by the user who published this configuration. */
		public string $description,
	) {
	}
}
