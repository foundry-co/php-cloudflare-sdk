<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Updates Security Center Insight Classification
 */
readonly class UpdateSecurityCenterInsightClassificationRequest
{
	public function __construct(
		/** User-defined classification for the insight. Can be 'false_positive', 'accept_risk', 'other', or null. */
		public ?\FoundryCo\Cloudflare\Enums\UpdateSecurityCenterInsightClassificationRequestClassification $classification = null,
		/** Rationale for the classification change. Required when classification is 'accept_risk' or 'other'. */
		public ?string $rationale = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'classification' => $this->classification?->value,
		    'rationale' => $this->rationale,
		], fn ($v) => $v !== null);
	}
}
