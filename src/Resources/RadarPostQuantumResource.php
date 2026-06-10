<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarPostQuantumResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get Origin Post-Quantum Data Summary
	 */
	public function get(
		\FoundryCo\Cloudflare\Enums\RadarPostQuantumDimension $dimension,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?\FoundryCo\Cloudflare\Enums\RadarPostQuantumFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/post_quantum/origin/summary/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarGetOriginPostQuantumSummary::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get Origin Post-Quantum Data Over Time
	 */
	public function timeseriesGroups(
		\FoundryCo\Cloudflare\Enums\RadarPostQuantumDimension $dimension,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?\FoundryCo\Cloudflare\Enums\RadarPostQuantumFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/post_quantum/origin/timeseries_groups/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarGetOriginPostQuantumTimeseriesGroups::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Check Post-Quantum TLS support
	 */
	public function list(?string $host = null): mixed
	{
		return $this->client->get('/radar/post_quantum/tls/support', \FoundryCo\Cloudflare\Responses\RadarGetPostQuantumTlsSupport::class, ['host' => $host ?? null]);
	}
}
