<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update an account entry point ruleset
 */
readonly class UpdateAccountEntrypointRulesetRequest
{
	public function __construct(
		public mixed $id,
		/** The timestamp of when the ruleset was last modified. */
		public \DateTimeImmutable $lastUpdated,
		public mixed $version,
		/** An informative description of the ruleset. */
		public ?string $description = null,
		/** The human-readable name of the ruleset. */
		public ?string $name = null,
		/** The list of rules in the ruleset. */
		public ?array $rules = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'id' => $this->id,
		    'last_updated' => $this->lastUpdated->format(\DateTimeImmutable::ATOM),
		    'version' => $this->version,
		    'description' => $this->description,
		    'name' => $this->name,
		    'rules' => $this->rules,
		], fn ($v) => $v !== null);
	}
}
