<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * The rate plan applied to the subscription.
 */
readonly class ZoneSubscriptionUpdateZoneSubscriptionRatePlan
{
	public function __construct(
		/** The currency applied to the rate plan subscription. */
		public ?string $currency = null,
		/** Whether this rate plan is managed externally from Cloudflare. */
		public ?bool $externallyManaged = null,
		/** The ID of the rate plan. */
		public ?string $id = null,
		/** Whether a rate plan is enterprise-based (or newly adopted term contract). */
		public ?bool $isContract = null,
		/** The full name of the rate plan. */
		public ?string $publicName = null,
		/** The scope that this rate plan applies to. */
		public ?string $scope = null,
		/** The list of sets this rate plan applies to. Returns array of strings. */
		public ?array $sets = null,
	) {
	}
}
