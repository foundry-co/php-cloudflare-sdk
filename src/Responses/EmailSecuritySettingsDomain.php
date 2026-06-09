<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailSecuritySettingsDomain
{
	public function __construct(
		public ?array $allowedDeliveryModes = null,
		public ?EmailSecuritySettingsDomainAuthorization $authorization = null,
		public mixed $createdAt = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecuritySettingsDomainDmarcStatus $dmarcStatus = null,
		public ?string $domain = null,
		public ?array $dropDispositions = null,
		public ?EmailSecuritySettingsDomainEmailsProcessed $emailsProcessed = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecuritySettingsDomainFolder $folder = null,
		/** Domain identifier */
		public ?string $id = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecuritySettingsDomainInboxProvider $inboxProvider = null,
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
		public ?\FoundryCo\Cloudflare\Enums\EmailSecuritySettingsDomainSpfStatus $spfStatus = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecuritySettingsDomainStatus $status = null,
		public ?string $transport = null,
	) {
	}
}
