<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class StreamLiveInputsInputs
{
	public function __construct(
		public ?array $liveInputs = null,
		/** The total number of remaining live inputs based on cursor position. */
		public ?int $range = null,
		/** The total number of live inputs that match the provided filters. */
		public ?int $total = null,
	) {
	}
}
