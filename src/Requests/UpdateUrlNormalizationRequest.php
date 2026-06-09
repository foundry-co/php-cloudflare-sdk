<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update URL Normalization settings
 */
readonly class UpdateUrlNormalizationRequest
{
	public function __construct(
		/** The scope of the URL normalization. */
		public \FoundryCo\Cloudflare\Enums\UpdateUrlNormalizationRequestScope $scope,
		/** The type of URL normalization performed by Cloudflare. */
		public \FoundryCo\Cloudflare\Enums\UpdateUrlNormalizationRequestType $type,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'scope' => $this->scope->value,
		    'type' => $this->type->value,
		], fn ($v) => $v !== null);
	}
}
