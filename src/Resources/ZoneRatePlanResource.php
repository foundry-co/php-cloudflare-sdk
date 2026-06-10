<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/available_plans', \FoundryCo\Cloudflare\Responses\ZoneRatePlanListAvailablePlans::class, []);
	}


	/**
	 * Available Plan Details
	 */
	public function get(string $planIdentifier): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/available_plans/' . $planIdentifier, \FoundryCo\Cloudflare\Responses\ZoneRatePlanAvailablePlanDetails::class, []);
	}


	/**
	 * List Available Rate Plans
	 */
	public function availableRatePlans(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/available_rate_plans', \FoundryCo\Cloudflare\Responses\ZoneRatePlanListAvailableRatePlans::class, []);
	}
}
