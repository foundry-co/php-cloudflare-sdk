<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class MagicIPsecTunnelsTunnelsIpsecTunnelsItemCustomRemoteIdentities
{
	public function __construct(
		/**
		 * A custom IKE ID of type FQDN that may be used to identity the IPsec tunnel. The
		 * generated IKE IDs can still be used even if this custom value is specified.
		 *
		 * Must be of the form `<custom label>.<account ID>.custom.ipsec.cloudflare.com`.
		 *
		 * This custom ID does not need to be unique. Two IPsec tunnels may have the same custom
		 * fqdn_id. However, if another IPsec tunnel has the same value then the two tunnels
		 * cannot have the same cloudflare_endpoint.
		 */
		public ?string $fqdnId = null,
	) {
	}
}
