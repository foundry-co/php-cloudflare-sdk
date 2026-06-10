<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class TenantsListAccountsSettings
{
	public function __construct(
		public ?string $abuseContactEmail = null,
		public ?\DateTimeImmutable $accessApprovalExpiry = null,
		public ?bool $apiAccessEnabled = null,
		/** Use [DNS Settings](https://developers.cloudflare.com/api/operations/dns-settings-for-an-account-list-dns-settings) instead. Deprecated. */
		public ?string $defaultNameservers = null,
		public ?bool $enforceTwofactor = null,
		/** Use [DNS Settings](https://developers.cloudflare.com/api/operations/dns-settings-for-an-account-list-dns-settings) instead. Deprecated. */
		public ?bool $useAccountCustomNsByDefault = null,
	) {
	}
}
