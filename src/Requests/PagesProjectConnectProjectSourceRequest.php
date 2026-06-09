<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Connect project source
 */
readonly class PagesProjectConnectProjectSourceRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Responses\PagesProjectConnectProjectSourceRequestConfig $config,
		/** The source control management provider. */
		public \FoundryCo\Cloudflare\Enums\PagesProjectConnectProjectSourceRequestType $type,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'config' => $this->config->toArray(),
		    'type' => $this->type->value,
		], fn ($v) => $v !== null);
	}
}
