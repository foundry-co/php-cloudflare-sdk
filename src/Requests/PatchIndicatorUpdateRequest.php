<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Updates an indicator
 */
readonly class PatchIndicatorUpdateRequest
{
	public function __construct(
		public ?string $indicatorType = null,
		public ?array $relatedEvents = null,
		public ?array $tags = null,
		public ?string $value = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'indicatorType' => $this->indicatorType,
		    'relatedEvents' => $this->relatedEvents,
		    'tags' => $this->tags,
		    'value' => $this->value,
		], fn ($v) => $v !== null);
	}
}
