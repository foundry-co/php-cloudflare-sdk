<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarWebCrawlersResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get crawler HTTP request distribution by dimension
	 */
	public function get(
		\FoundryCo\Cloudflare\Enums\RadarWebCrawlersDimension $dimension,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?int $limitPerGroup = null,
		?array $botOperator = null,
		?array $vertical = null,
		?array $industry = null,
		?array $clientType = null,
		?array $responseStatus = null,
		?array $responseStatusCategory = null,
		?\FoundryCo\Cloudflare\Enums\RadarWebCrawlersFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarWebCrawlersSummary
	{
		return $this->client->get('/radar/bots/crawlers/summary/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarWebCrawlersSummary::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'botOperator' => $botOperator ?? null, 'vertical' => $vertical ?? null, 'industry' => $industry ?? null, 'clientType' => $clientType ?? null, 'responseStatus' => $responseStatus ?? null, 'responseStatusCategory' => $responseStatusCategory ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get time series of crawler HTTP request distribution by dimension
	 */
	public function timeseriesGroups(
		\FoundryCo\Cloudflare\Enums\RadarWebCrawlersDimension $dimension,
		?\FoundryCo\Cloudflare\Enums\RadarWebCrawlersAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarWebCrawlersNormalization $normalization = null,
		?array $botOperator = null,
		?array $vertical = null,
		?array $industry = null,
		?array $clientType = null,
		?array $responseStatus = null,
		?array $responseStatusCategory = null,
		?\FoundryCo\Cloudflare\Enums\RadarWebCrawlersFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarWebCrawlersGroup
	{
		return $this->client->get('/radar/bots/crawlers/timeseries_groups/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarWebCrawlersGroup::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'normalization' => $normalization ?? null, 'botOperator' => $botOperator ?? null, 'vertical' => $vertical ?? null, 'industry' => $industry ?? null, 'clientType' => $clientType ?? null, 'responseStatus' => $responseStatus ?? null, 'responseStatusCategory' => $responseStatusCategory ?? null, 'format' => $format ?? null]);
	}
}
