<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class IpAddressManagementPrefixesUpdateBgpPrefix
{
	public function __construct(
		/** Autonomous System Number (ASN) the prefix will be advertised under. */
		public ?int $asn = null,
		/** Number of times to prepend the Cloudflare ASN to the BGP AS-Path attribute */
		public ?int $asnPrependCount = null,
		/** Determines if Cloudflare advertises a BYOIP BGP prefix even when there is no matching BGP prefix in the Magic routing table. When true, Cloudflare will automatically withdraw the BGP prefix when there are no matching BGP routes, and will resume advertising when there is at least one matching BGP route. */
		public ?bool $autoAdvertiseWithdraw = null,
		public ?IpAddressManagementPrefixesUpdateBgpPrefixBgpSignalOpts $bgpSignalOpts = null,
		/** IP Prefix in Classless Inter-Domain Routing format. */
		public ?string $cidr = null,
		public ?\DateTimeImmutable $createdAt = null,
		/** Identifier of BGP Prefix. */
		public ?string $id = null,
		public ?\DateTimeImmutable $modifiedAt = null,
		public ?IpAddressManagementPrefixesUpdateBgpPrefixOnDemand $onDemand = null,
	) {
	}
}
