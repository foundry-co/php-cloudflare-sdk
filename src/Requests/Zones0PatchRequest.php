<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Edit Zone
 */
readonly class Zones0PatchRequest
{
	public function __construct(
		/**
		 * Indicates whether the zone is only using Cloudflare DNS services. A
		 * true value means the zone will not receive security or performance
		 * benefits.
		 */
		public ?bool $paused = null,
		/**
		 * (Deprecated) Please use the `/zones/{zone_id}/subscription` API
		 * to update a zone's plan. Changing this value will create/cancel
		 * associated subscriptions. To view available plans for this zone,
		 * see Zone Plans.
		 */
		public ?\FoundryCo\Cloudflare\Responses\Zones0PatchRequestPlan $plan = null,
		/**
		 * A full zone implies that DNS is hosted with Cloudflare. A partial
		 * zone is typically a partner-hosted zone or a CNAME setup. This
		 * parameter is only available to Enterprise customers or if it has
		 * been explicitly enabled on a zone.
		 */
		public ?\FoundryCo\Cloudflare\Enums\Zones0PatchRequestType $type = null,
		/**
		 * An array of domains used for custom name servers. This is only
		 * available for Business and Enterprise plans.
		 */
		public ?array $vanityNameServers = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'paused' => $this->paused,
		    'plan' => $this->plan?->toArray(),
		    'type' => $this->type?->value,
		    'vanity_name_servers' => $this->vanityNameServers,
		], fn ($v) => $v !== null);
	}
}
