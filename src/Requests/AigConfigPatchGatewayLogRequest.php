<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Patch Gateway Log
 */
readonly class AigConfigPatchGatewayLogRequest
{
	public function __construct(
		public ?float $feedback = null,
		public ?array $metadata = null,
		public ?float $score = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'feedback' => $this->feedback,
		    'metadata' => $this->metadata,
		    'score' => $this->score,
		], fn ($v) => $v !== null);
	}
}
