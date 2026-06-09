<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create an Access application policy
 */
readonly class AccessPoliciesCreateAnAccessPolicyRequest
{
	public function __construct(
		/**
		 * The order of execution for this policy. Must be unique for each policy within an app.
		 */
		public ?int $precedence = null,
		/** Administrators who can approve a temporary authentication request. */
		public ?array $approvalGroups = null,
		/** Requires the user to request access from an administrator at the start of each session. */
		public ?bool $approvalRequired = null,
		/** The rules that define how users may connect to targets secured by your application. */
		public ?\FoundryCo\Cloudflare\Responses\AccessPoliciesCreateAnAccessPolicyRequestConnectionRules $connectionRules = null,
		/** Require this application to be served in an isolated browser for users matching this policy. 'Client Web Isolation' must be on for the account in order to use this feature. */
		public ?bool $isolationRequired = null,
		/** Configures multi-factor authentication (MFA) settings. */
		public ?\FoundryCo\Cloudflare\Responses\AccessPoliciesCreateAnAccessPolicyRequestMfaConfig $mfaConfig = null,
		/** A custom message that will appear on the purpose justification screen. */
		public ?string $purposeJustificationPrompt = null,
		/** Require users to enter a justification when they log in to the application. */
		public ?bool $purposeJustificationRequired = null,
		/** The amount of time that tokens issued for the application will be valid. Must be in the format `300ms` or `2h45m`. Valid time units are: ns, us (or µs), ms, s, m, h. */
		public ?string $sessionDuration = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'precedence' => $this->precedence,
		    'approval_groups' => $this->approvalGroups,
		    'approval_required' => $this->approvalRequired,
		    'connection_rules' => $this->connectionRules?->toArray(),
		    'isolation_required' => $this->isolationRequired,
		    'mfa_config' => $this->mfaConfig?->toArray(),
		    'purpose_justification_prompt' => $this->purposeJustificationPrompt,
		    'purpose_justification_required' => $this->purposeJustificationRequired,
		    'session_duration' => $this->sessionDuration,
		], fn ($v) => $v !== null);
	}
}
