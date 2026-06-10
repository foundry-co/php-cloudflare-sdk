<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * [DEPRECATED] Create Pipeline
 */
readonly class PostV4AccountsByAccountIdPipelinesDeprecatedRequest
{
	public function __construct(
		public \FoundryCo\Cloudflare\Responses\PostV4AccountsByAccountIdPipelinesDeprecatedRequestDestination $destination,
		/** Defines the name of the pipeline. */
		public string $name,
		public array $source,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'destination' => $this->destination->toArray(),
		    'name' => $this->name,
		    'source' => $this->source,
		], fn ($v) => $v !== null);
	}
}
