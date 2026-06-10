<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class IpAddressManagementAddressMapsListAddressMaps
{
	public function __construct(
		/** If set to false, then the Address Map cannot be deleted via API. This is true for Cloudflare-managed maps. */
		public ?bool $canDelete = null,
		/** If set to false, then the IPs on the Address Map cannot be modified via the API. This is true for Cloudflare-managed maps. */
		public ?bool $canModifyIps = null,
		public ?\DateTimeImmutable $createdAt = null,
		/** If you have legacy TLS clients which do not send the TLS server name indicator, then you can specify one default SNI on the map. If Cloudflare receives a TLS handshake from a client without an SNI, it will respond with the default SNI on those IPs. The default SNI can be any valid zone or subdomain owned by the account. */
		public ?string $defaultSni = null,
		/** An optional description field which may be used to describe the types of IPs or zones on the map. */
		public ?string $description = null,
		/** Whether the Address Map is enabled or not. Cloudflare's DNS will not respond with IP addresses on an Address Map until the map is enabled. */
		public ?bool $enabled = null,
		/** Identifier of an Address Map. */
		public ?string $id = null,
		public ?\DateTimeImmutable $modifiedAt = null,
	) {
	}
}
