<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZoneLevelAccessPoliciesCreateAnAccessPolicy
{
	public function __construct(
		/** Administrators who can approve a temporary authentication request. */
		public ?array $approvalGroups = null,
		/** Requires the user to request access from an administrator at the start of each session. */
		public ?bool $approvalRequired = null,
		public ?\DateTimeImmutable $createdAt = null,
		/** The action Access will take if a user matches this policy. */
		public ?\FoundryCo\Cloudflare\Enums\ZoneLevelAccessPoliciesCreateAnAccessPolicyDecision $decision = null,
		/** Rules evaluated with a NOT logical operator. To match the policy, a user cannot meet any of the Exclude rules. */
		public ?array $exclude = null,
		/** UUID. */
		public ?string $id = null,
		/** Rules evaluated with an OR logical operator. A user needs to meet only one of the Include rules. */
		public ?array $include = null,
		/** Require this application to be served in an isolated browser for users matching this policy. */
		public ?bool $isolationRequired = null,
		/** The name of the Access policy. */
		public ?string $name = null,
		/** The order of execution for this policy. Must be unique for each policy. */
		public ?int $precedence = null,
		/** A custom message that will appear on the purpose justification screen. */
		public ?string $purposeJustificationPrompt = null,
		/** Require users to enter a justification when they log in to the application. */
		public ?bool $purposeJustificationRequired = null,
		/** Rules evaluated with an AND logical operator. To match the policy, a user must meet all of the Require rules. */
		public ?array $require = null,
		public ?\DateTimeImmutable $updatedAt = null,
	) {
	}
}
