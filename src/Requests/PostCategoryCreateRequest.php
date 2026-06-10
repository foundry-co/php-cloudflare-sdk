<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Creates a new category
 */
readonly class PostCategoryCreateRequest
{
	public function __construct(
		public float $killChain,
		public string $name,
		public ?array $mitreAttack = null,
		public ?array $mitreCapec = null,
		public ?string $shortname = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'killChain' => $this->killChain,
		    'name' => $this->name,
		    'mitreAttack' => $this->mitreAttack,
		    'mitreCapec' => $this->mitreCapec,
		    'shortname' => $this->shortname,
		], fn ($v) => $v !== null);
	}
}
