<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZoneRatePlanResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List Available Plans
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\ZoneRatePlanPlans
	{
		return $this->client->get('/zones/' . $this->zoneId . '/available_plans', \FoundryCo\Cloudflare\Responses\ZoneRatePlanPlans::class, []);
	}


	/**
	 * Available Plan Details
	 */
	public function get(string $planIdentifier): \FoundryCo\Cloudflare\Responses\ZoneRatePlanDetails
	{
		return $this->client->get('/zones/' . $this->zoneId . '/available_plans/' . $planIdentifier, \FoundryCo\Cloudflare\Responses\ZoneRatePlanDetails::class, []);
	}


	/**
	 * List Available Rate Plans
	 */
	public function availableRatePlans(): \FoundryCo\Cloudflare\Responses\ZoneRatePlanPlans
	{
		return $this->client->get('/zones/' . $this->zoneId . '/available_rate_plans', \FoundryCo\Cloudflare\Responses\ZoneRatePlanPlans::class, []);
	}
}
