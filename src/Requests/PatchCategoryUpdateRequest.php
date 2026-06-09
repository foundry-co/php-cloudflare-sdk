<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Updates a category
 */
readonly class PatchCategoryUpdateRequest
{
	public function __construct(
		public ?float $killChain = null,
		public ?array $mitreAttack = null,
		public ?array $mitreCapec = null,
		public ?string $name = null,
		public ?string $shortname = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'killChain' => $this->killChain,
		    'mitreAttack' => $this->mitreAttack,
		    'mitreCapec' => $this->mitreCapec,
		    'name' => $this->name,
		    'shortname' => $this->shortname,
		], fn ($v) => $v !== null);
	}
}
