<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarGeolocationsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List Geolocations
	 */
	public function list(
		?int $limit = null,
		?int $offset = null,
		?string $geoId = null,
		?string $location = null,
		?\FoundryCo\Cloudflare\Enums\RadarGeolocationsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarGeolocationsGeolocations
	{
		return $this->client->get('/radar/geolocations', \FoundryCo\Cloudflare\Responses\RadarGeolocationsGeolocations::class, ['limit' => $limit ?? null, 'offset' => $offset ?? null, 'geoId' => $geoId ?? null, 'location' => $location ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get Geolocation details
	 */
	public function get(
		string $geoId,
		?\FoundryCo\Cloudflare\Enums\RadarGeolocationsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarGeolocationsDetails
	{
		return $this->client->get('/radar/geolocations/' . $geoId, \FoundryCo\Cloudflare\Responses\RadarGeolocationsDetails::class, ['format' => $format ?? null]);
	}
}
