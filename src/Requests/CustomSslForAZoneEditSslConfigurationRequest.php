<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Edit SSL Configuration
 */
readonly class CustomSslForAZoneEditSslConfigurationRequest
{
	public function __construct(
		/** A ubiquitous bundle has the highest probability of being verified everywhere, even by clients using outdated or unusual trust stores. An optimal bundle uses the shortest chain and newest intermediates. And the force bundle verifies the chain, but does not otherwise modify it. */
		public ?\FoundryCo\Cloudflare\Enums\CustomSslForAZoneEditSslConfigurationRequestBundleMethod $bundleMethod = null,
		/** The zone's SSL certificate or certificate and the intermediate(s). */
		public ?string $certificate = null,
		/** The identifier for the Custom CSR that was used. */
		public ?string $customCsrId = null,
		/** The environment to deploy the certificate to, defaults to production. */
		public ?\FoundryCo\Cloudflare\Enums\CustomSslForAZoneEditSslConfigurationRequestDeploy $deploy = null,
		/** Specify the region where your private key can be held locally for optimal TLS performance. HTTPS connections to any excluded data center will still be fully encrypted, but will incur some latency while Keyless SSL is used to complete the handshake with the nearest allowed data center. Options allow distribution to only to U.S. data centers, only to E.U. data centers, or only to highest security data centers. Default distribution is to all Cloudflare datacenters, for optimal performance. */
		public ?\FoundryCo\Cloudflare\Responses\CustomSslForAZoneEditSslConfigurationRequestGeoRestrictions $geoRestrictions = null,
		/**
		 * Specify the policy that determines the region where your private key will be held locally. HTTPS connections to any excluded data center will still be fully encrypted, but will incur some latency while Keyless SSL is used to complete the handshake with the nearest allowed data center. Any combination of countries, specified by their two letter country code (https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2#Officially_assigned_code_elements) can be chosen, such as 'country: IN', as well as 'region: EU' which refers to the EU region. If there are too few data centers satisfying the policy, it will be rejected.
		 * Note: The API accepts this field as either "policy" or "policy_restrictions" in requests. Responses return this field as "policy_restrictions".
		 */
		public ?string $policy = null,
		/** The zone's private key. Not required if custom_csr_id is provided, in which case the private key is retrieved from the CSR record held by Cloudflare. */
		public ?string $privateKey = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'bundle_method' => $this->bundleMethod?->value,
		    'certificate' => $this->certificate,
		    'custom_csr_id' => $this->customCsrId,
		    'deploy' => $this->deploy?->value,
		    'geo_restrictions' => $this->geoRestrictions?->toArray(),
		    'policy' => $this->policy,
		    'private_key' => $this->privateKey,
		], fn ($v) => $v !== null);
	}
}
