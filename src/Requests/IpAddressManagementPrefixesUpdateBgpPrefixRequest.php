<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update BGP Prefix
 */
readonly class IpAddressManagementPrefixesUpdateBgpPrefixRequest
{
	public function __construct(
		/** Number of times to prepend the Cloudflare ASN to the BGP AS-Path attribute */
		public ?int $asnPrependCount = null,
		/** Determines if Cloudflare advertises a BYOIP BGP prefix even when there is no matching BGP prefix in the Magic routing table. When true, Cloudflare will automatically withdraw the BGP prefix when there are no matching BGP routes, and will resume advertising when there is at least one matching BGP route. */
		public ?bool $autoAdvertiseWithdraw = null,
		public ?\FoundryCo\Cloudflare\Responses\IpAddressManagementPrefixesUpdateBgpPrefixRequestOnDemand $onDemand = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'asn_prepend_count' => $this->asnPrependCount,
		    'auto_advertise_withdraw' => $this->autoAdvertiseWithdraw,
		    'on_demand' => $this->onDemand?->toArray(),
		], fn ($v) => $v !== null);
	}
}
