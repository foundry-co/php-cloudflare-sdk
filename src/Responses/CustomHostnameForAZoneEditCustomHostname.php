<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CustomHostnameForAZoneEditCustomHostname
{
	public function __construct(
		/** The custom hostname that will point to your hostname via CNAME. */
		public ?string $hostname = null,
		/** Identifier. */
		public ?string $id = null,
		/** SSL properties for the custom hostname. */
		public mixed $ssl = null,
		/** This is the time the hostname was created. */
		public ?\DateTimeImmutable $createdAt = null,
		/** Unique key/value metadata for this hostname. These are per-hostname (customer) settings. */
		public ?array $customMetadata = null,
		/** a valid hostname that’s been added to your DNS zone as an A, AAAA, or CNAME record. */
		public ?string $customOriginServer = null,
		/** A hostname that will be sent to your custom origin server as SNI for TLS handshake. This can be a valid subdomain of the zone or custom origin server name or the string ':request_host_header:' which will cause the host header in the request to be used as SNI. Not configurable with default/fallback origin server. */
		public ?string $customOriginSni = null,
		/** This is a record which can be placed to activate a hostname. */
		public mixed $ownershipVerification = null,
		/** This presents the token to be served by the given http url to activate a hostname. */
		public mixed $ownershipVerificationHttp = null,
		/** Status of the hostname's activation. */
		public ?\FoundryCo\Cloudflare\Enums\CustomHostnameForAZoneEditCustomHostnameStatus $status = null,
		/** These are errors that were encountered while trying to activate a hostname. */
		public ?array $verificationErrors = null,
	) {
	}
}
