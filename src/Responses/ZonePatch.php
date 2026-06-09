<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ZonePatch
{
	public function __construct(
		/** The account the zone belongs to. */
		public ZonePatchAccount $account,
		/**
		 * The last time proof of ownership was detected and the zone was made
		 * active.
		 */
		public \DateTimeImmutable $activatedOn,
		/** When the zone was created. */
		public \DateTimeImmutable $createdOn,
		/**
		 * The interval (in seconds) from when development mode expires
		 * (positive integer) or last expired (negative integer) for the
		 * domain. If development mode has never been enabled, this value is 0.
		 */
		public float $developmentMode,
		/** Identifier */
		public string $id,
		/** Metadata about the zone. */
		public ZonePatchMeta $meta,
		/** When the zone was last modified. */
		public \DateTimeImmutable $modifiedOn,
		/** The domain name. Per [RFC 1035](https://datatracker.ietf.org/doc/html/rfc1035#section-2.3.4) the overall zone name can be up to 253 characters, with each segment ("label") not exceeding 63 characters. */
		public string $name,
		/** The name servers Cloudflare assigns to a zone. */
		public array $nameServers,
		/** DNS host at the time of switching to Cloudflare. */
		public string $originalDnshost,
		/** Original name servers before moving to Cloudflare. */
		public array $originalNameServers,
		/** Registrar for the domain at the time of switching to Cloudflare. */
		public string $originalRegistrar,
		/** The owner of the zone. */
		public ZonePatchOwner $owner,
		/** A Zones subscription information. */
		public ZonePatchPlan $plan,
		/**
		 * Allows the customer to use a custom apex.
		 * *Tenants Only Configuration*.
		 */
		public ?string $cnameSuffix = null,
		/**
		 * Indicates whether the zone is only using Cloudflare DNS services. A
		 * true value means the zone will not receive security or performance
		 * benefits.
		 */
		public ?bool $paused = null,
		/** Legacy permissions based on legacy user membership information. */
		public ?array $permissions = null,
		/** The zone status on Cloudflare. */
		public ?\FoundryCo\Cloudflare\Enums\ZonePatchStatus $status = null,
		/** The root organizational unit that this zone belongs to (such as a tenant or organization). */
		public ?ZonePatchTenant $tenant = null,
		/** The immediate parent organizational unit that this zone belongs to (such as under a tenant or sub-organization). */
		public ?ZonePatchTenantUnit $tenantUnit = null,
		/**
		 * A full zone implies that DNS is hosted with Cloudflare. A partial zone is
		 * typically a partner-hosted zone or a CNAME setup.
		 */
		public ?\FoundryCo\Cloudflare\Enums\ZonePatchType $type = null,
		/** An array of domains used for custom name servers. This is only available for Business and Enterprise plans. */
		public ?array $vanityNameServers = null,
		/** Verification key for partial zone setup. */
		public ?string $verificationKey = null,
	) {
	}
}
