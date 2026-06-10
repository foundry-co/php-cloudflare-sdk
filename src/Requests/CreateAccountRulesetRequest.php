<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create an account ruleset
 */
readonly class CreateAccountRulesetRequest
{
	public function __construct(
		public mixed $id,
		/** The timestamp of when the ruleset was last modified. */
		public \DateTimeImmutable $lastUpdated,
		/** The human-readable name of the ruleset. */
		public string $name,
		public mixed $version,
		/** The kind of the ruleset. */
		public \FoundryCo\Cloudflare\Enums\CreateAccountRulesetRequestKind $kind,
		/** The phase of the ruleset. */
		public \FoundryCo\Cloudflare\Enums\CreateAccountRulesetRequestPhase $phase,
		/** An informative description of the ruleset. */
		public ?string $description = null,
		/** The list of rules in the ruleset. */
		public ?array $rules = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'id' => $this->id,
		    'last_updated' => $this->lastUpdated->format(\DateTimeImmutable::ATOM),
		    'name' => $this->name,
		    'version' => $this->version,
		    'kind' => $this->kind->value,
		    'phase' => $this->phase->value,
		    'description' => $this->description,
		    'rules' => $this->rules,
		], fn ($v) => $v !== null);
	}
}
