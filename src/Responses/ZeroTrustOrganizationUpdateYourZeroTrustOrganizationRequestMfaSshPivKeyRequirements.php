<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configures SSH PIV key requirements for MFA using hardware security keys.
 */
readonly class ZeroTrustOrganizationUpdateYourZeroTrustOrganizationRequestMfaSshPivKeyRequirements
{
	public function __construct(
		/** Defines when a PIN is required to use the SSH key. Valid values: `never` (no PIN required), `once` (PIN required once per session), `always` (PIN required for each use). */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustOrganizationUpdateYourZeroTrustOrganizationRequestMfaSshPivKeyRequirementsPinPolicy $pinPolicy = null,
		/** Requires the SSH PIV key to be stored on a FIPS 140-2 Level 1 or higher validated device. */
		public ?bool $requireFipsDevice = null,
		/** Specifies the allowed SSH key sizes in bits. Valid sizes depend on key type. Ed25519 has a fixed key size and does not accept this parameter. */
		public ?array $sshKeySize = null,
		/** Specifies the allowed SSH key types. Valid values are `ecdsa`, `ed25519`, and `rsa`. */
		public ?array $sshKeyType = null,
		/** Defines when physical touch is required to use the SSH key. Valid values: `never` (no touch required), `always` (touch required for each use), `cached` (touch cached for 15 seconds). */
		public ?\FoundryCo\Cloudflare\Enums\ZeroTrustOrganizationUpdateYourZeroTrustOrganizationRequestMfaSshPivKeyRequirementsTouchPolicy $touchPolicy = null,
	) {
	}
}
