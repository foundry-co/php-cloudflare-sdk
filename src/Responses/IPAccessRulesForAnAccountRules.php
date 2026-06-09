<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class IPAccessRulesForAnAccountRules
{
	public function __construct(
		/** The available actions that a rule can apply to a matched request. */
		public array $allowedModes,
		/** The rule configuration. */
		public mixed $configuration,
		/** The unique identifier of the IP Access rule. */
		public string $id,
		/** The action to apply to a matched request. */
		public \FoundryCo\Cloudflare\Enums\IPAccessRulesForAnAccountRulesMode $mode,
		/** The timestamp of when the rule was created. */
		public ?\DateTimeImmutable $createdOn = null,
		/** The timestamp of when the rule was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** An informative summary of the rule, typically used as a reminder or explanation. */
		public ?string $notes = null,
		/** All zones owned by the user will have the rule applied. */
		public ?IPAccessRulesForAnAccountRulesScope $scope = null,
	) {
	}
}
