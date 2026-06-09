<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Edit Universal SSL Settings
 */
readonly class UniversalSslSettingsForAZoneEditUniversalSslSettingsRequest
{
	public function __construct(
		/**
		 * Disabling Universal SSL removes any currently active Universal SSL certificates for your zone from the edge and prevents any future Universal SSL certificates from being ordered. If there are no advanced certificates or custom certificates uploaded for the domain, visitors will be unable to access the domain over HTTPS.
		 *
		 * By disabling Universal SSL, you understand that the following Cloudflare settings and preferences will result in visitors being unable to visit your domain unless you have uploaded a custom certificate or purchased an advanced certificate.
		 *
		 * * HSTS
		 * * Always Use HTTPS
		 * * Opportunistic Encryption
		 * * Onion Routing
		 * * Any Page Rules redirecting traffic to HTTPS
		 *
		 * Similarly, any HTTP redirect to HTTPS at the origin while the Cloudflare proxy is enabled will result in users being unable to visit your site without a valid certificate at Cloudflare's edge.
		 *
		 * If you do not have a valid custom or advanced certificate at Cloudflare's edge and are unsure if any of the above Cloudflare settings are enabled, or if any HTTP redirects exist at your origin, we advise leaving Universal SSL enabled for your domain.
		 */
		public ?bool $enabled = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'enabled' => $this->enabled,
		], fn ($v) => $v !== null);
	}
}
