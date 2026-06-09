<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Statuses for domain transfers into Cloudflare Registrar.
 */
readonly class RegistrarDomainsDomainsTransferIn
{
	public function __construct(
		/** Form of authorization has been accepted by the registrant. */
		public ?\FoundryCo\Cloudflare\Enums\RegistrarDomainsDomainsTransferInAcceptFoa $acceptFoa = null,
		/** Shows transfer status with the registry. */
		public ?\FoundryCo\Cloudflare\Enums\RegistrarDomainsDomainsTransferInApproveTransfer $approveTransfer = null,
		/** Indicates if cancellation is still possible. */
		public ?bool $canCancelTransfer = null,
		/** Privacy guards are disabled at the foreign registrar. */
		public ?\FoundryCo\Cloudflare\Enums\RegistrarDomainsDomainsTransferInDisablePrivacy $disablePrivacy = null,
		/** Auth code has been entered and verified. */
		public ?\FoundryCo\Cloudflare\Enums\RegistrarDomainsDomainsTransferInEnterAuthCode $enterAuthCode = null,
		/** Domain is unlocked at the foreign registrar. */
		public ?\FoundryCo\Cloudflare\Enums\RegistrarDomainsDomainsTransferInUnlockDomain $unlockDomain = null,
	) {
	}
}
