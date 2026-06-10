<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarSearchResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Search for locations, ASes, reports, and more
	 */
	public function list(
		?int $limit = null,
		?float $limitPerGroup = null,
		?string $query = null,
		?array $include = null,
		?array $exclude = null,
		?\FoundryCo\Cloudflare\Enums\RadarSearchFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/search/global', \FoundryCo\Cloudflare\Responses\RadarGetSearchGlobal::class, ['limit' => $limit ?? null, 'limitPerGroup' => $limitPerGroup ?? null, 'query' => $query ?? null, 'include' => $include ?? null, 'exclude' => $exclude ?? null, 'format' => $format ?? null]);
	}
}
