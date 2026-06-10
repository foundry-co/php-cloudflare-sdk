<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * (Deprecated) Please use the `/zones/{zone_id}/subscription` API
 * to update a zone's plan. Changing this value will create/cancel
 * associated subscriptions. To view available plans for this zone,
 * see Zone Plans.
 */
readonly class Zones0PatchRequestPlan
{
	public function __construct(
		/** Identifier */
		public ?string $id = null,
	) {
	}
}
