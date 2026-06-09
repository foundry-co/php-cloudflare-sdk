<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a Request Message
 */
readonly class CloudforceOneRequestMessageUpdateRequest
{
	public function __construct(
		/** Content of message. */
		public ?string $content = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'content' => $this->content,
		], fn ($v) => $v !== null);
	}
}
