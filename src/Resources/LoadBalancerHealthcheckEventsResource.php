<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class LoadBalancerHealthcheckEventsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List Healthcheck Events
	 */
	public function list(
		?\DateTimeImmutable $until = null,
		?string $poolName = null,
		?bool $originHealthy = null,
		?string $poolId = null,
		?\DateTimeImmutable $since = null,
		?string $originName = null,
		?bool $poolHealthy = null,
	): \FoundryCo\Cloudflare\Responses\LoadBalancerHealthcheckEventsEvents
	{
		return $this->client->get('/user/load_balancing_analytics/events', \FoundryCo\Cloudflare\Responses\LoadBalancerHealthcheckEventsEvents::class, ['until' => $until ?? null, 'poolName' => $poolName ?? null, 'originHealthy' => $originHealthy ?? null, 'poolId' => $poolId ?? null, 'since' => $since ?? null, 'originName' => $originName ?? null, 'poolHealthy' => $poolHealthy ?? null]);
	}
}
