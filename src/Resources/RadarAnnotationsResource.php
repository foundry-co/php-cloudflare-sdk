<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarAnnotationsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get latest annotations
	 */
	public function list(
		?int $limit = null,
		?int $offset = null,
		?string $dateRange = null,
		?\DateTimeImmutable $dateStart = null,
		?\DateTimeImmutable $dateEnd = null,
		?\FoundryCo\Cloudflare\Enums\RadarAnnotationsDataSource $dataSource = null,
		?\FoundryCo\Cloudflare\Enums\RadarAnnotationsEventType $eventType = null,
		?int $asn = null,
		?string $location = null,
		?string $origin = null,
		?\FoundryCo\Cloudflare\Enums\RadarAnnotationsFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/annotations', \FoundryCo\Cloudflare\Responses\RadarGetAnnotations::class, ['limit' => $limit ?? null, 'offset' => $offset ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'dataSource' => $dataSource ?? null, 'eventType' => $eventType ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'origin' => $origin ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get latest Internet outages and anomalies
	 */
	public function outages(
		?int $limit = null,
		?int $offset = null,
		?string $dateRange = null,
		?\DateTimeImmutable $dateStart = null,
		?\DateTimeImmutable $dateEnd = null,
		?int $asn = null,
		?string $location = null,
		?string $origin = null,
		?\FoundryCo\Cloudflare\Enums\RadarAnnotationsFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/annotations/outages', \FoundryCo\Cloudflare\Responses\RadarGetAnnotationsOutages::class, ['limit' => $limit ?? null, 'offset' => $offset ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'asn' => $asn ?? null, 'location' => $location ?? null, 'origin' => $origin ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get the number of outages by location
	 */
	public function locations(
		?int $limit = null,
		?string $dateRange = null,
		?\DateTimeImmutable $dateStart = null,
		?\DateTimeImmutable $dateEnd = null,
		?\FoundryCo\Cloudflare\Enums\RadarAnnotationsFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/annotations/outages/locations', \FoundryCo\Cloudflare\Responses\RadarGetAnnotationsOutagesTop::class, ['limit' => $limit ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'format' => $format ?? null]);
	}
}
