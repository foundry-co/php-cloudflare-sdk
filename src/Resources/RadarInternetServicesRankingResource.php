<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarInternetServicesRankingResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List Internet services categories
	 */
	public function list(
		?int $limit = null,
		?array $name = null,
		?array $date = null,
		?\FoundryCo\Cloudflare\Enums\RadarInternetServicesRankingFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarInternetServicesRankingCategories
	{
		return $this->client->get('/radar/ranking/internet_services/categories', \FoundryCo\Cloudflare\Responses\RadarInternetServicesRankingCategories::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'date' => $date ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get Internet services rank time series
	 */
	public function timeseriesGroups(
		?array $serviceCategory = null,
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?\FoundryCo\Cloudflare\Enums\RadarInternetServicesRankingFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarInternetServicesRankingTimeseries
	{
		return $this->client->get('/radar/ranking/internet_services/timeseries_groups', \FoundryCo\Cloudflare\Responses\RadarInternetServicesRankingTimeseries::class, ['serviceCategory' => $serviceCategory ?? null, 'limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top Internet services
	 */
	public function top(
		?array $serviceCategory = null,
		?int $limit = null,
		?array $name = null,
		?array $date = null,
		?\FoundryCo\Cloudflare\Enums\RadarInternetServicesRankingFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarInternetServicesRankingServices
	{
		return $this->client->get('/radar/ranking/internet_services/top', \FoundryCo\Cloudflare\Responses\RadarInternetServicesRankingServices::class, ['serviceCategory' => $serviceCategory ?? null, 'limit' => $limit ?? null, 'name' => $name ?? null, 'date' => $date ?? null, 'format' => $format ?? null]);
	}
}
