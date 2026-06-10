<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessPoliciesListAccessReusablePolicies
{
	public function __construct(
		/** Administrators who can approve a temporary authentication request. */
		public ?array $approvalGroups = null,
		/** Requires the user to request access from an administrator at the start of each session. */
		public ?bool $approvalRequired = null,
		/** The rules that define how users may connect to targets secured by your application. */
		public ?AccessPoliciesListAccessReusablePoliciesConnectionRules $connectionRules = null,
		/** Require this application to be served in an isolated browser for users matching this policy. 'Client Web Isolation' must be on for the account in order to use this feature. */
		public ?bool $isolationRequired = null,
		/** Configures multi-factor authentication (MFA) settings. */
		public ?AccessPoliciesListAccessReusablePoliciesMfaConfig $mfaConfig = null,
		/** A custom message that will appear on the purpose justification screen. */
		public ?string $purposeJustificationPrompt = null,
		/** Require users to enter a justification when they log in to the application. */
		public ?bool $purposeJustificationRequired = null,
		/** The amount of time that tokens issued for the application will be valid. Must be in the format `300ms` or `2h45m`. Valid time units are: ns, us (or µs), ms, s, m, h. */
		public ?string $sessionDuration = null,
		public ?\DateTimeImmutable $createdAt = null,
		/** The action Access will take if a user matches this policy. Infrastructure application policies can only use the Allow action. */
		public ?\FoundryCo\Cloudflare\Enums\AccessPoliciesListAccessReusablePoliciesDecision $decision = null,
		/** Rules evaluated with a NOT logical operator. To match the policy, a user cannot meet any of the Exclude rules. */
		public ?array $exclude = null,
		/** The UUID of the policy */
		public ?string $id = null,
		/** Rules evaluated with an OR logical operator. A user needs to meet only one of the Include rules. */
		public ?array $include = null,
		/** The name of the Access policy. */
		public ?string $name = null,
		/** Rules evaluated with an AND logical operator. To match the policy, a user must meet all of the Require rules. */
		public ?array $require = null,
		public ?\DateTimeImmutable $updatedAt = null,
		/** Number of access applications currently using this policy. */
		public ?int $appCount = null,
		public ?\FoundryCo\Cloudflare\Enums\AccessPoliciesListAccessReusablePoliciesReusable $reusable = null,
	) {
	}
}
