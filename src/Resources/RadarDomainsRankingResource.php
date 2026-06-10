<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarDomainsRankingResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get domain rank details
	 */
	public function get(
		string $domain,
		?int $limit = null,
		?\FoundryCo\Cloudflare\Enums\RadarDomainsRankingRankingType $rankingType = null,
		?array $name = null,
		?bool $includeTopLocations = null,
		?array $date = null,
		?\FoundryCo\Cloudflare\Enums\RadarDomainsRankingFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/ranking/domain/' . $domain, \FoundryCo\Cloudflare\Responses\RadarGetRankingDomainDetails::class, ['limit' => $limit ?? null, 'rankingType' => $rankingType ?? null, 'name' => $name ?? null, 'includeTopLocations' => $includeTopLocations ?? null, 'date' => $date ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get domains rank time series
	 */
	public function list(
		?int $limit = null,
		?\FoundryCo\Cloudflare\Enums\RadarDomainsRankingRankingType $rankingType = null,
		?array $name = null,
		?array $location = null,
		?array $domains = null,
		?array $domainCategory = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?\FoundryCo\Cloudflare\Enums\RadarDomainsRankingFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/ranking/timeseries_groups', \FoundryCo\Cloudflare\Responses\RadarGetRankingDomainTimeseries::class, ['limit' => $limit ?? null, 'rankingType' => $rankingType ?? null, 'name' => $name ?? null, 'location' => $location ?? null, 'domains' => $domains ?? null, 'domainCategory' => $domainCategory ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top or trending domains
	 */
	public function top(
		?int $limit = null,
		?array $name = null,
		?array $location = null,
		?array $domainCategory = null,
		?array $date = null,
		?\FoundryCo\Cloudflare\Enums\RadarDomainsRankingRankingType $rankingType = null,
		?\FoundryCo\Cloudflare\Enums\RadarDomainsRankingFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/ranking/top', \FoundryCo\Cloudflare\Responses\RadarGetRankingTopDomains::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'location' => $location ?? null, 'domainCategory' => $domainCategory ?? null, 'date' => $date ?? null, 'rankingType' => $rankingType ?? null, 'format' => $format ?? null]);
	}
}
