<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarTopLevelDomainsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List TLDs
	 */
	public function list(
		?int $limit = null,
		?int $offset = null,
		?string $tldManager = null,
		?\FoundryCo\Cloudflare\Enums\RadarTopLevelDomainsTldType $tldType = null,
		?string $tld = null,
		?\FoundryCo\Cloudflare\Enums\RadarTopLevelDomainsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarTopLevelDomainsTlds
	{
		return $this->client->get('/radar/tlds', \FoundryCo\Cloudflare\Responses\RadarTopLevelDomainsTlds::class, ['limit' => $limit ?? null, 'offset' => $offset ?? null, 'tldManager' => $tldManager ?? null, 'tldType' => $tldType ?? null, 'tld' => $tld ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get TLD Performance Summary
	 */
	public function get(
		\FoundryCo\Cloudflare\Enums\RadarTopLevelDomainsDimension $dimension,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $tld = null,
		?string $nameserver = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarTopLevelDomainsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarTopLevelDomainsSummary
	{
		return $this->client->get('/radar/tlds/performance/summary/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarTopLevelDomainsSummary::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'nameserver' => $nameserver ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get TLD Performance Over Time
	 */
	public function timeseriesGroups(
		\FoundryCo\Cloudflare\Enums\RadarTopLevelDomainsDimension $dimension,
		?\FoundryCo\Cloudflare\Enums\RadarTopLevelDomainsAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $location = null,
		?array $continent = null,
		?array $tld = null,
		?string $nameserver = null,
		?int $limitPerGroup = null,
		?\FoundryCo\Cloudflare\Enums\RadarTopLevelDomainsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarTopLevelDomainsGroups
	{
		return $this->client->get('/radar/tlds/performance/timeseries_groups/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarTopLevelDomainsGroups::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'tld' => $tld ?? null, 'nameserver' => $nameserver ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get TLD details
	 */
	public function getGet(
		string $tld,
		?\FoundryCo\Cloudflare\Enums\RadarTopLevelDomainsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarTopLevelDomainsDetails
	{
		return $this->client->get('/radar/tlds/' . $tld, \FoundryCo\Cloudflare\Responses\RadarTopLevelDomainsDetails::class, ['format' => $format ?? null]);
	}
}
