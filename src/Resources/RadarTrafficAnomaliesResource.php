<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarTrafficAnomaliesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get latest Internet traffic anomalies
	 */
	public function list(
		?int $limit = null,
		?int $offset = null,
		?string $dateRange = null,
		?\DateTimeImmutable $dateStart = null,
		?\DateTimeImmutable $dateEnd = null,
		?\FoundryCo\Cloudflare\Enums\RadarTrafficAnomaliesStatus $status = null,
		?array $type = null,
		?int $asn = null,
		?string $location = null,
		?string $origin = null,
		?\FoundryCo\Cloudflare\Enums\RadarTrafficAnomaliesFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/traffic_anomalies', \FoundryCo\Cloudflare\Responses\RadarGetTrafficAnomalies::class, ['limit' => $limit ?? null, 'offset' => $offset ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'status' => $status ?? null, 'type' => $type ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'origin' => $origin ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get top locations by total traffic anomalies
	 */
	public function locations(
		?int $limit = null,
		?string $dateRange = null,
		?\DateTimeImmutable $dateStart = null,
		?\DateTimeImmutable $dateEnd = null,
		?\FoundryCo\Cloudflare\Enums\RadarTrafficAnomaliesStatus $status = null,
		?\FoundryCo\Cloudflare\Enums\RadarTrafficAnomaliesFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/traffic_anomalies/locations', \FoundryCo\Cloudflare\Responses\RadarGetTrafficAnomaliesTop::class, ['limit' => $limit ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'status' => $status ?? null, 'format' => $format ?? null]);
	}
}
