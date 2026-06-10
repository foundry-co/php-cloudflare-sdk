<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class IpAccessRulesForAUserListIpAccessRules
{
	public function __construct(
		/** The available actions that a rule can apply to a matched request. */
		public ?array $allowedModes = null,
		/** The rule configuration. */
		public mixed $configuration = null,
		/** The unique identifier of the IP Access rule. */
		public ?string $id = null,
		/** The action to apply to a matched request. */
		public ?\FoundryCo\Cloudflare\Enums\IpAccessRulesForAUserListIpAccessRulesMode $mode = null,
		/** The timestamp of when the rule was created. */
		public ?\DateTimeImmutable $createdOn = null,
		/** The timestamp of when the rule was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** An informative summary of the rule, typically used as a reminder or explanation. */
		public ?string $notes = null,
	) {
	}
}
