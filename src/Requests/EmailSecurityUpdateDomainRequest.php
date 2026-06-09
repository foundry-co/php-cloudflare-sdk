<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update an email domain
 */
readonly class EmailSecurityUpdateDomainRequest
{
	public function __construct(
		public ?array $allowedDeliveryModes = null,
		public ?string $domain = null,
		public ?array $dropDispositions = null,
		public ?\FoundryCo\Cloudflare\Enums\EmailSecurityUpdateDomainRequestFolder $folder = null,
		public ?string $integrationId = null,
		public ?array $ipRestrictions = null,
		public ?int $lookbackHops = null,
		public ?array $regions = null,
		public ?bool $requireTlsInbound = null,
		public ?bool $requireTlsOutbound = null,
		public ?string $transport = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'allowed_delivery_modes' => $this->allowedDeliveryModes?->value,
		    'domain' => $this->domain,
		    'drop_dispositions' => $this->dropDispositions?->value,
		    'folder' => $this->folder?->value,
		    'integration_id' => $this->integrationId,
		    'ip_restrictions' => $this->ipRestrictions,
		    'lookback_hops' => $this->lookbackHops,
		    'regions' => $this->regions?->value,
		    'require_tls_inbound' => $this->requireTlsInbound,
		    'require_tls_outbound' => $this->requireTlsOutbound,
		    'transport' => $this->transport,
		], fn ($v) => $v !== null);
	}
}
