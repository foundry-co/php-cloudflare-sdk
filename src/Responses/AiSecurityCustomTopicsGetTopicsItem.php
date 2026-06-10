<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AiSecurityCustomTopicsGetTopicsItem
{
	public function __construct(
		/** Unique label identifier. Must contain only lowercase letters (a–z), digits (0–9), and hyphens. */
		public ?string $label = null,
		/** Description of the topic category. Must contain only printable ASCII characters. */
		public ?string $topic = null,
	) {
	}
}
