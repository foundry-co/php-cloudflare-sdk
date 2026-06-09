<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarQualityResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get Internet Quality Index (IQI) summary
	 */
	public function list(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?\FoundryCo\Cloudflare\Enums\RadarQualityMetric $metric = null,
		?\FoundryCo\Cloudflare\Enums\RadarQualityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarQualitySummary
	{
		return $this->client->get('/radar/quality/iqi/summary', \FoundryCo\Cloudflare\Responses\RadarQualitySummary::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'metric' => $metric ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get Internet Quality Index (IQI) time series
	 */
	public function timeseriesGroups(
		?\FoundryCo\Cloudflare\Enums\RadarQualityAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?bool $interpolation = null,
		?\FoundryCo\Cloudflare\Enums\RadarQualityMetric $metric = null,
		?\FoundryCo\Cloudflare\Enums\RadarQualityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarQualityGroup
	{
		return $this->client->get('/radar/quality/iqi/timeseries_groups', \FoundryCo\Cloudflare\Responses\RadarQualityGroup::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'interpolation' => $interpolation ?? null, 'metric' => $metric ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get speed tests histogram
	 */
	public function histogram(
		?array $name = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?int $bucketSize = null,
		?\FoundryCo\Cloudflare\Enums\RadarQualityMetricGroup $metricGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarQualityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarQualityHistogram
	{
		return $this->client->get('/radar/quality/speed/histogram', \FoundryCo\Cloudflare\Responses\RadarQualityHistogram::class, ['name' => $name ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'bucketSize' => $bucketSize ?? null, 'metricGroup' => $metricGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get speed tests summary
	 */
	public function summary(
		?array $name = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?\FoundryCo\Cloudflare\Enums\RadarQualityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarQualitySummary
	{
		return $this->client->get('/radar/quality/speed/summary', \FoundryCo\Cloudflare\Responses\RadarQualitySummary::class, ['name' => $name ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top ASes by speed test results
	 */
	public function ases(
		?int $limit = null,
		?array $name = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?\FoundryCo\Cloudflare\Enums\RadarQualityOrderBy $orderBy = null,
		?bool $reverse = null,
		?\FoundryCo\Cloudflare\Enums\RadarQualityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarQualityAses
	{
		return $this->client->get('/radar/quality/speed/top/ases', \FoundryCo\Cloudflare\Responses\RadarQualityAses::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'orderBy' => $orderBy ?? null, 'reverse' => $reverse ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top locations by speed test results
	 */
	public function locations(
		?int $limit = null,
		?array $name = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?\FoundryCo\Cloudflare\Enums\RadarQualityOrderBy $orderBy = null,
		?bool $reverse = null,
		?\FoundryCo\Cloudflare\Enums\RadarQualityFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarQualityLocations
	{
		return $this->client->get('/radar/quality/speed/top/locations', \FoundryCo\Cloudflare\Responses\RadarQualityLocations::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'orderBy' => $orderBy ?? null, 'reverse' => $reverse ?? null, 'format' => $format ?? null]);
	}
}
