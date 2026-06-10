<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CustomSslForAZoneCreateSslConfiguration
{
	public function __construct(
		/** Identifier. */
		public ?string $id = null,
		/** Identifier. */
		public ?string $zoneId = null,
		/** A ubiquitous bundle has the highest probability of being verified everywhere, even by clients using outdated or unusual trust stores. An optimal bundle uses the shortest chain and newest intermediates. And the force bundle verifies the chain, but does not otherwise modify it. */
		public ?\FoundryCo\Cloudflare\Enums\CustomSslForAZoneCreateSslConfigurationBundleMethod $bundleMethod = null,
		/** The identifier for the Custom CSR that was used. */
		public ?string $customCsrId = null,
		/** When the certificate from the authority expires. */
		public ?\DateTimeImmutable $expiresOn = null,
		/** Specify the region where your private key can be held locally for optimal TLS performance. HTTPS connections to any excluded data center will still be fully encrypted, but will incur some latency while Keyless SSL is used to complete the handshake with the nearest allowed data center. Options allow distribution to only to U.S. data centers, only to E.U. data centers, or only to highest security data centers. Default distribution is to all Cloudflare datacenters, for optimal performance. */
		public ?CustomSslForAZoneCreateSslConfigurationGeoRestrictions $geoRestrictions = null,
		public ?array $hosts = null,
		/** The certificate authority that issued the certificate. */
		public ?string $issuer = null,
		public ?CustomSslForAZoneCreateSslConfigurationKeylessServer $keylessServer = null,
		/** When the certificate was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/**
		 * The policy restrictions returned by the API. This field is returned in responses
		 * when a policy has been set. The API accepts the "policy" field in requests but
		 * returns this field as "policy_restrictions" in responses.
		 *
		 * Specifies the region(s) where your private key can be held locally for optimal
		 * TLS performance. Format is a boolean expression, for example:
		 * "(country: US) or (region: EU)"
		 */
		public ?string $policyRestrictions = null,
		/** The order/priority in which the certificate will be used in a request. The higher priority will break ties across overlapping 'legacy_custom' certificates, but 'legacy_custom' certificates will always supercede 'sni_custom' certificates. */
		public ?float $priority = null,
		/** The type of hash used for the certificate. */
		public ?string $signature = null,
		/** Status of the zone's custom SSL. */
		public ?\FoundryCo\Cloudflare\Enums\CustomSslForAZoneCreateSslConfigurationStatus $status = null,
		/** When the certificate was uploaded to Cloudflare. */
		public ?\DateTimeImmutable $uploadedOn = null,
	) {
	}
}
