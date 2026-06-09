<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarBotsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List bots
	 */
	public function list(
		?int $limit = null,
		?int $offset = null,
		?\FoundryCo\Cloudflare\Enums\RadarBotsBotCategory $botCategory = null,
		?string $botOperator = null,
		?\FoundryCo\Cloudflare\Enums\RadarBotsKind $kind = null,
		?\FoundryCo\Cloudflare\Enums\RadarBotsBotVerificationStatus $botVerificationStatus = null,
		?\FoundryCo\Cloudflare\Enums\RadarBotsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarBotsBots
	{
		return $this->client->get('/radar/bots', \FoundryCo\Cloudflare\Responses\RadarBotsBots::class, ['limit' => $limit ?? null, 'offset' => $offset ?? null, 'botCategory' => $botCategory ?? null, 'botOperator' => $botOperator ?? null, 'kind' => $kind ?? null, 'botVerificationStatus' => $botVerificationStatus ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get bots HTTP requests distribution by dimension
	 */
	public function get(
		\FoundryCo\Cloudflare\Enums\RadarBotsDimension $dimension,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?int $limitPerGroup = null,
		?array $bot = null,
		?array $botOperator = null,
		?array $botCategory = null,
		?array $botKind = null,
		?array $botVerificationStatus = null,
		?\FoundryCo\Cloudflare\Enums\RadarBotsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarBotsSummary
	{
		return $this->client->get('/radar/bots/summary/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarBotsSummary::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'bot' => $bot ?? null, 'botOperator' => $botOperator ?? null, 'botCategory' => $botCategory ?? null, 'botKind' => $botKind ?? null, 'botVerificationStatus' => $botVerificationStatus ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get bots HTTP requests time series
	 */
	public function timeseries(
		?\FoundryCo\Cloudflare\Enums\RadarBotsAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?array $bot = null,
		?array $botOperator = null,
		?array $botCategory = null,
		?array $botKind = null,
		?array $botVerificationStatus = null,
		?\FoundryCo\Cloudflare\Enums\RadarBotsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarBotsTimeseries
	{
		return $this->client->get('/radar/bots/timeseries', \FoundryCo\Cloudflare\Responses\RadarBotsTimeseries::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'bot' => $bot ?? null, 'botOperator' => $botOperator ?? null, 'botCategory' => $botCategory ?? null, 'botKind' => $botKind ?? null, 'botVerificationStatus' => $botVerificationStatus ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get time series distribution of bots HTTP requests by dimension.
	 */
	public function timeseriesGroups(
		\FoundryCo\Cloudflare\Enums\RadarBotsDimension $dimension,
		?\FoundryCo\Cloudflare\Enums\RadarBotsAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?int $limitPerGroup = null,
		?array $bot = null,
		?array $botOperator = null,
		?array $botCategory = null,
		?array $botKind = null,
		?array $botVerificationStatus = null,
		?\FoundryCo\Cloudflare\Enums\RadarBotsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarBotsGroup
	{
		return $this->client->get('/radar/bots/timeseries_groups/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarBotsGroup::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'bot' => $bot ?? null, 'botOperator' => $botOperator ?? null, 'botCategory' => $botCategory ?? null, 'botKind' => $botKind ?? null, 'botVerificationStatus' => $botVerificationStatus ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get bot details
	 */
	public function getGet(
		string $botSlug,
		?\FoundryCo\Cloudflare\Enums\RadarBotsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarBotsDetails
	{
		return $this->client->get('/radar/bots/' . $botSlug, \FoundryCo\Cloudflare\Responses\RadarBotsDetails::class, ['format' => $format ?? null]);
	}
}
