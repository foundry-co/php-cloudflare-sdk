<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessApplicationScopedPoliciesPolicy
{
	public function __construct(
		/** Administrators who can approve a temporary authentication request. */
		public ?array $approvalGroups = null,
		/** Requires the user to request access from an administrator at the start of each session. */
		public ?bool $approvalRequired = null,
		/** The rules that define how users may connect to targets secured by your application. */
		public ?AccessApplicationScopedPoliciesPolicyConnectionRules $connectionRules = null,
		/** Require this application to be served in an isolated browser for users matching this policy. 'Client Web Isolation' must be on for the account in order to use this feature. */
		public ?bool $isolationRequired = null,
		/** Configures multi-factor authentication (MFA) settings. */
		public ?AccessApplicationScopedPoliciesPolicyMfaConfig $mfaConfig = null,
		/** A custom message that will appear on the purpose justification screen. */
		public ?string $purposeJustificationPrompt = null,
		/** Require users to enter a justification when they log in to the application. */
		public ?bool $purposeJustificationRequired = null,
		/** The amount of time that tokens issued for the application will be valid. Must be in the format `300ms` or `2h45m`. Valid time units are: ns, us (or µs), ms, s, m, h. */
		public ?string $sessionDuration = null,
		/**
		 * The order of execution for this policy. Must be unique for each policy within an app.
		 */
		public ?int $precedence = null,
	) {
	}
}
