<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSecurityGetDomain
{
	public function __construct(
		public ?array $allowedDeliveryModes = null,
		public ?EmailSecurityGetDomainAuthorization $authorization = null,
		public mixed $createdAt = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityGetDomainDmarcStatus $dmarcStatus = null,
		public ?string $domain = null,
		public ?array $dropDispositions = null,
		public ?EmailSecurityGetDomainEmailsProcessed $emailsProcessed = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityGetDomainFolder $folder = null,
		/** Domain identifier */
		public ?string $id = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityGetDomainInboxProvider $inboxProvider = null,
		public ?string $integrationId = null,
		public ?array $ipRestrictions = null,
		/** Deprecated, use `modified_at` instead. End of life: November 1, 2026. */
		public mixed $lastModified = null,
		public ?int $lookbackHops = null,
		public mixed $modifiedAt = null,
		public ?string $o365TenantId = null,
		public ?array $regions = null,
		public ?bool $requireTlsInbound = null,
		public ?bool $requireTlsOutbound = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityGetDomainSpfStatus $spfStatus = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityGetDomainStatus $status = null,
		public ?string $transport = null,
	) {
	}
}
