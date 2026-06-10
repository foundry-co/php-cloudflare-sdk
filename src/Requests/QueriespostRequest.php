<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Save query
 */
readonly class QueriespostRequest
{
	public function __construct(
		public string $description,
		/** Query name */
		public string $name,
		public \FoundryCo\Cloudflare\Responses\QueriespostRequestParameters $parameters,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'description' => $this->description,
		    'name' => $this->name,
		    'parameters' => $this->parameters->toArray(),
		], fn ($v) => $v !== null);
	}
}
