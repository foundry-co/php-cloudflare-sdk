<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class NotificationSilencesGetSilence
{
	public function __construct(
		/** When the silence was created. */
		public ?string $createdAt = null,
		/** When the silence ends. */
		public ?string $endTime = null,
		/** Silence ID */
		public ?string $id = null,
		/** The unique identifier of a notification policy */
		public ?string $policyId = null,
		/** When the silence starts. */
		public ?string $startTime = null,
		/** When the silence was modified. */
		public ?string $updatedAt = null,
	) {
	}
}
