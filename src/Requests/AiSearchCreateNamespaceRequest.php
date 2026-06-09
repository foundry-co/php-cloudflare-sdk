<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create namespace.
 */
readonly class AiSearchCreateNamespaceRequest
{
	public function __construct(
		public string $name,
		/** Optional description for the namespace. Max 256 characters. */
		public ?string $description = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'description' => $this->description,
		], fn ($v) => $v !== null);
	}
}
