<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarVerifiedBotsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get top verified bots by HTTP requests
	 */
	public function list(
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?\FoundryCo\Cloudflare\Enums\RadarVerifiedBotsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarVerifiedBotsRequests
	{
		return $this->client->get('/radar/verified_bots/top/bots', \FoundryCo\Cloudflare\Responses\RadarVerifiedBotsRequests::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top verified bot categories by HTTP requests
	 */
	public function categories(
		?int $limit = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?array $asn = null,
		?array $location = null,
		?array $continent = null,
		?\FoundryCo\Cloudflare\Enums\RadarVerifiedBotsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarVerifiedBotsRequests
	{
		return $this->client->get('/radar/verified_bots/top/categories', \FoundryCo\Cloudflare\Responses\RadarVerifiedBotsRequests::class, ['limit' => $limit ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'continent' => $continent ?? null, 'format' => $format ?? null]);
	}
}
