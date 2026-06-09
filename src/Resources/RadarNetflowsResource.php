<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarNetflowsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get network traffic summary
	 */
	public function list(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?\FoundryCo\Cloudflare\Enums\RadarNetFlowsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarNetFlowsDeprecated
	{
		return $this->client->get('/radar/netflows/summary', \FoundryCo\Cloudflare\Responses\RadarNetFlowsDeprecated::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get network traffic distribution by dimension
	 */
	public function get(
		\FoundryCo\Cloudflare\Enums\RadarNetFlowsDimension $dimension,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?array $product = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarNetFlowsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarNetFlowsSummary
	{
		return $this->client->get('/radar/netflows/summary/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarNetFlowsSummary::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'product' => $product ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get network traffic time series
	 */
	public function timeseries(
		?\FoundryCo\Cloudflare\Enums\RadarNetFlowsAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $product = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?\FoundryCo\Cloudflare\Enums\RadarNetFlowsNormalization $normalization = null,
		?\FoundryCo\Cloudflare\Enums\RadarNetFlowsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarNetFlowsTimeseries
	{
		return $this->client->get('/radar/netflows/timeseries', \FoundryCo\Cloudflare\Responses\RadarNetFlowsTimeseries::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'product' => $product ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'normalization' => $normalization ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get time series distribution of network traffic by dimension
	 */
	public function timeseriesGroups(
		\FoundryCo\Cloudflare\Enums\RadarNetFlowsDimension $dimension,
		?\FoundryCo\Cloudflare\Enums\RadarNetFlowsAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarNetFlowsNormalization $normalization = null,
		?array $product = null,
		?\FoundryCo\Cloudflare\Enums\RadarNetFlowsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarNetFlowsGroup
	{
		return $this->client->get('/radar/netflows/timeseries_groups/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarNetFlowsGroup::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'normalization' => $normalization ?? null, 'product' => $product ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top ASes by network traffic
	 */
	public function ases(
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?\FoundryCo\Cloudflare\Enums\RadarNetFlowsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarNetFlowsAses
	{
		return $this->client->get('/radar/netflows/top/ases', \FoundryCo\Cloudflare\Responses\RadarNetFlowsAses::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top locations by network traffic
	 */
	public function locations(
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $geoId = null,
		?\FoundryCo\Cloudflare\Enums\RadarNetFlowsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarNetFlowsLocations
	{
		return $this->client->get('/radar/netflows/top/locations', \FoundryCo\Cloudflare\Responses\RadarNetFlowsLocations::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'geoId' => $geoId ?? null, 'format' => $format ?? null]);
	}
}
