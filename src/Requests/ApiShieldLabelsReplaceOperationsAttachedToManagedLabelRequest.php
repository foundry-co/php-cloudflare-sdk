<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Replace operation(s) attached to a managed label
 */
readonly class ApiShieldLabelsReplaceOperationsAttachedToManagedLabelRequest
{
	public function __construct(
		/** Operation IDs selector */
		public \FoundryCo\Cloudflare\Responses\ApiShieldLabelsReplaceOperationsAttachedToManagedLabelRequestSelector $selector,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'selector' => $this->selector->toArray(),
		], fn ($v) => $v !== null);
	}
}
