<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarLocationsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List locations
	 */
	public function list(
		?int $limit = null,
		?int $offset = null,
		?string $location = null,
		?string $region = null,
		?string $subregion = null,
		?\FoundryCo\Cloudflare\Enums\RadarLocationsContinent $continent = null,
		?\FoundryCo\Cloudflare\Enums\RadarLocationsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLocationsLocations
	{
		return $this->client->get('/radar/entities/locations', \FoundryCo\Cloudflare\Responses\RadarLocationsLocations::class, ['limit' => $limit ?? null, 'offset' => $offset ?? null, 'location' => $location ?? null, 'region' => $region ?? null, 'subregion' => $subregion ?? null, 'continent' => $continent ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get location details
	 */
	public function get(
		string $location,
		?\FoundryCo\Cloudflare\Enums\RadarLocationsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarLocationsAlpha2
	{
		return $this->client->get('/radar/entities/locations/' . $location, \FoundryCo\Cloudflare\Responses\RadarLocationsAlpha2::class, ['format' => $format ?? null]);
	}
}
