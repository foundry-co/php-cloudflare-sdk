<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Destination
 */
readonly class DestinationcreateRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Responses\DestinationcreateRequestConfiguration $configuration,
		public bool $enabled,
		public string $name,
		public ?bool $skipPreflightCheck = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'configuration' => $this->configuration->toArray(),
		    'enabled' => $this->enabled,
		    'name' => $this->name,
		    'skipPreflightCheck' => $this->skipPreflightCheck,
		], fn ($v) => $v !== null);
	}
}
