<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new share
 */
readonly class ShareCreateRequest
{
	public function __construct(
		/** The name of the share. */
		public string $name,
		public array $recipients,
		public array $resources,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'recipients' => $this->recipients,
		    'resources' => $this->resources,
		], fn ($v) => $v !== null);
	}
}
