<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Creates a new indicator
 */
readonly class PostIndicatorCreateRequest
{
	public function __construct(
		public string $indicatorType,
		public string $value,
		/** If true, automatically create the indicator type if it doesn't exist. If false (default), throw an error when the indicator type doesn't exist. */
		public ?bool $autoCreateType = null,
		public ?array $relatedEvents = null,
		public ?array $tags = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'indicatorType' => $this->indicatorType,
		    'value' => $this->value,
		    'autoCreateType' => $this->autoCreateType,
		    'relatedEvents' => $this->relatedEvents,
		    'tags' => $this->tags,
		], fn ($v) => $v !== null);
	}
}
