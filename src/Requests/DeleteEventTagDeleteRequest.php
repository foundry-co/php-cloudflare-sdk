<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Removes a tag from an event
 */
readonly class DeleteEventTagDeleteRequest
{
	public function __construct(
		public array $tags,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'tags' => $this->tags,
		], fn ($v) => $v !== null);
	}
}
