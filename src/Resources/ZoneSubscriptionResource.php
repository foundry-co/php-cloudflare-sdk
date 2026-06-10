<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZoneSubscriptionResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Zone Subscription Details
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/subscription', \FoundryCo\Cloudflare\Responses\ZoneSubscriptionZoneSubscriptionDetails::class, []);
	}


	/**
	 * Create Zone Subscription
	 */
	public function create(\FoundryCo\Cloudflare\Requests\ZoneSubscriptionCreateZoneSubscriptionRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/subscription', \FoundryCo\Cloudflare\Responses\ZoneSubscriptionCreateZoneSubscription::class, $request);
	}


	/**
	 * Update Zone Subscription
	 */
	public function update(\FoundryCo\Cloudflare\Requests\ZoneSubscriptionUpdateZoneSubscriptionRequest $request): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/subscription', \FoundryCo\Cloudflare\Responses\ZoneSubscriptionUpdateZoneSubscription::class, $request);
	}
}
