<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new indicator type
 */
readonly class PostIndicatorTypeCreateRequest
{
	public function __construct(
		/** The indicator type to create (e.g., 'DOMAIN', 'IP', 'URL', 'HASH', 'EMAIL') */
		public string $indicatorType,
		/** Optional description for the indicator type */
		public ?string $description = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'indicatorType' => $this->indicatorType,
		    'description' => $this->description,
		], fn ($v) => $v !== null);
	}
}
