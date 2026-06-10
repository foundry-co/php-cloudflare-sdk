<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarAIBotsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get AI user agents summary
	 */
	public function list(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarAIBotsFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/ai/bots/summary/user_agent', \FoundryCo\Cloudflare\Responses\RadarGetAiBotsSummaryByUserAgent::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get AI bots HTTP requests distribution by dimension
	 */
	public function get(
		\FoundryCo\Cloudflare\Enums\RadarAIBotsDimension $dimension,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $crawlPurpose = null,
		?array $userAgent = null,
		?array $vertical = null,
		?array $industry = null,
		?array $contentType = null,
		?array $responseStatus = null,
		?array $responseStatusCategory = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarAIBotsFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/ai/bots/summary/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarGetAiBotsSummary::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'crawlPurpose' => $crawlPurpose ?? null, 'userAgent' => $userAgent ?? null, 'vertical' => $vertical ?? null, 'industry' => $industry ?? null, 'contentType' => $contentType ?? null, 'responseStatus' => $responseStatus ?? null, 'responseStatusCategory' => $responseStatusCategory ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get AI bots HTTP requests time series
	 */
	public function timeseries(
		?\FoundryCo\Cloudflare\Enums\RadarAIBotsAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $crawlPurpose = null,
		?array $userAgent = null,
		?array $industry = null,
		?array $vertical = null,
		?array $contentType = null,
		?array $responseStatus = null,
		?array $responseStatusCategory = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarAIBotsFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/ai/bots/timeseries', \FoundryCo\Cloudflare\Responses\RadarGetAiBotsTimeseries::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'crawlPurpose' => $crawlPurpose ?? null, 'userAgent' => $userAgent ?? null, 'industry' => $industry ?? null, 'vertical' => $vertical ?? null, 'contentType' => $contentType ?? null, 'responseStatus' => $responseStatus ?? null, 'responseStatusCategory' => $responseStatusCategory ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get AI user agents time series
	 */
	public function userAgent(
		?\FoundryCo\Cloudflare\Enums\RadarAIBotsAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarAIBotsFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/ai/bots/timeseries_groups/user_agent', \FoundryCo\Cloudflare\Responses\RadarGetAiBotsTimeseriesGroupByUserAgent::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get time series distribution of AI bots HTTP requests by dimension.
	 */
	public function timeseriesGroups(
		\FoundryCo\Cloudflare\Enums\RadarAIBotsDimension $dimension,
		?\FoundryCo\Cloudflare\Enums\RadarAIBotsAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $crawlPurpose = null,
		?array $userAgent = null,
		?array $industry = null,
		?array $vertical = null,
		?array $contentType = null,
		?array $responseStatus = null,
		?array $responseStatusCategory = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarAIBotsNormalization $normalization = null,
		?\FoundryCo\Cloudflare\Enums\RadarAIBotsFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/ai/bots/timeseries_groups/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarGetAiBotsTimeseriesGroup::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'crawlPurpose' => $crawlPurpose ?? null, 'userAgent' => $userAgent ?? null, 'industry' => $industry ?? null, 'vertical' => $vertical ?? null, 'contentType' => $contentType ?? null, 'responseStatus' => $responseStatus ?? null, 'responseStatusCategory' => $responseStatusCategory ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'normalization' => $normalization ?? null, 'format' => $format ?? null]);
	}
}
