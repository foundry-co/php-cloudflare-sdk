<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Creates multiple indicators in bulk
 */
readonly class PostIndicatorCreateBulkRequest
{
	public function __construct(
		public array $indicators,
		/** Global flag to automatically create indicator types if they don't exist. Individual indicators can override this with their own autoCreateType flag. */
		public ?bool $autoCreateType = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'indicators' => $this->indicators,
		    'autoCreateType' => $this->autoCreateType,
		], fn ($v) => $v !== null);
	}
}
