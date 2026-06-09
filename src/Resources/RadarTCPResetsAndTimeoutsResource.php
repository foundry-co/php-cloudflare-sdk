<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarTCPResetsAndTimeoutsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get TCP resets and timeouts summary
	 */
	public function list(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?\FoundryCo\Cloudflare\Enums\RadarTCPResetsAndTimeoutsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarTCPResetsAndTimeoutsSummary
	{
		return $this->client->get('/radar/tcp_resets_timeouts/summary', \FoundryCo\Cloudflare\Responses\RadarTCPResetsAndTimeoutsSummary::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get TCP resets and timeouts time series
	 */
	public function timeseriesGroups(
		?\FoundryCo\Cloudflare\Enums\RadarTCPResetsAndTimeoutsAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?\FoundryCo\Cloudflare\Enums\RadarTCPResetsAndTimeoutsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarTCPResetsAndTimeoutsGroup
	{
		return $this->client->get('/radar/tcp_resets_timeouts/timeseries_groups', \FoundryCo\Cloudflare\Responses\RadarTCPResetsAndTimeoutsGroup::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'format' => $format ?? null]);
	}
}
