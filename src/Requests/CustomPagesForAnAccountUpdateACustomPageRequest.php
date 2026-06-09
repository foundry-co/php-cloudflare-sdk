<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a custom page
 */
readonly class CustomPagesForAnAccountUpdateACustomPageRequest
{
	public function __construct(
		/** The custom page state. */
		public \FoundryCo\Cloudflare\Enums\CustomPagesForAnAccountUpdateACustomPageRequestState $state,
		/** The URL associated with the custom page. */
		public string $url,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'state' => $this->state->value,
		    'url' => $this->url,
		], fn ($v) => $v !== null);
	}
}
