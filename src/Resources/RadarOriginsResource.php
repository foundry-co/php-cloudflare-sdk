<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarOriginsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List Origins
	 */
	public function list(
		?int $limit = null,
		?int $offset = null,
		?\FoundryCo\Cloudflare\Enums\RadarOriginsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarOriginsOrigins
	{
		return $this->client->get('/radar/origins', \FoundryCo\Cloudflare\Responses\RadarOriginsOrigins::class, ['limit' => $limit ?? null, 'offset' => $offset ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get origin metrics distribution by dimension
	 */
	public function get(
		\FoundryCo\Cloudflare\Enums\RadarOriginsDimension $dimension,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?int $limitPerGroup = null,
		?array $origin = null,
		?\FoundryCo\Cloudflare\Enums\RadarOriginsMetric $metric = null,
		?array $region = null,
		?\FoundryCo\Cloudflare\Enums\RadarOriginsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarOriginsSummary
	{
		return $this->client->get('/radar/origins/summary/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarOriginsSummary::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'origin' => $origin ?? null, 'metric' => $metric ?? null, 'region' => $region ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get origin metrics time series
	 */
	public function timeseries(
		?\FoundryCo\Cloudflare\Enums\RadarOriginsAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $origin = null,
		?\FoundryCo\Cloudflare\Enums\RadarOriginsMetric $metric = null,
		?array $region = null,
		?\FoundryCo\Cloudflare\Enums\RadarOriginsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarOriginsTimeseries
	{
		return $this->client->get('/radar/origins/timeseries', \FoundryCo\Cloudflare\Responses\RadarOriginsTimeseries::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'origin' => $origin ?? null, 'metric' => $metric ?? null, 'region' => $region ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get origin metrics time series grouped by dimension
	 */
	public function timeseriesGroups(
		\FoundryCo\Cloudflare\Enums\RadarOriginsDimension $dimension,
		?\FoundryCo\Cloudflare\Enums\RadarOriginsAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?int $limitPerGroup = null,
		?array $origin = null,
		?\FoundryCo\Cloudflare\Enums\RadarOriginsMetric $metric = null,
		?array $region = null,
		?\FoundryCo\Cloudflare\Enums\RadarOriginsNormalization $normalization = null,
		?\FoundryCo\Cloudflare\Enums\RadarOriginsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarOriginsGroup
	{
		return $this->client->get('/radar/origins/timeseries_groups/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarOriginsGroup::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'origin' => $origin ?? null, 'metric' => $metric ?? null, 'region' => $region ?? null, 'normalization' => $normalization ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get Origin details
	 */
	public function getGet(
		\FoundryCo\Cloudflare\Enums\RadarOriginsSlug $slug,
		?\FoundryCo\Cloudflare\Enums\RadarOriginsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarOriginsDetails
	{
		return $this->client->get('/radar/origins/' . $slug, \FoundryCo\Cloudflare\Responses\RadarOriginsDetails::class, ['format' => $format ?? null]);
	}
}
