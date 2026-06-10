<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Statuses for domain transfers into Cloudflare Registrar.
 */
readonly class RegistrarDomainsListDomainsTransferIn
{
	public function __construct(
		/** Form of authorization has been accepted by the registrant. */
		public ?\FoundryCo\Cloudflare\Enums\RegistrarDomainsListDomainsTransferInAcceptFoa $acceptFoa = null,
		/** Shows transfer status with the registry. */
		public ?\FoundryCo\Cloudflare\Enums\RegistrarDomainsListDomainsTransferInApproveTransfer $approveTransfer = null,
		/** Indicates if cancellation is still possible. */
		public ?bool $canCancelTransfer = null,
		/** Privacy guards are disabled at the foreign registrar. */
		public ?\FoundryCo\Cloudflare\Enums\RegistrarDomainsListDomainsTransferInDisablePrivacy $disablePrivacy = null,
		/** Auth code has been entered and verified. */
		public ?\FoundryCo\Cloudflare\Enums\RegistrarDomainsListDomainsTransferInEnterAuthCode $enterAuthCode = null,
		/** Domain is unlocked at the foreign registrar. */
		public ?\FoundryCo\Cloudflare\Enums\RegistrarDomainsListDomainsTransferInUnlockDomain $unlockDomain = null,
	) {
	}
}
