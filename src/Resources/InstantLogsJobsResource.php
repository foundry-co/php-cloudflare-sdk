<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class InstantLogsJobsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List Instant Logs jobs
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/logpush/edge/jobs', \FoundryCo\Cloudflare\Responses\GetZonesZoneIdLogpushEdgeJobs::class, []);
	}


	/**
	 * Create Instant Logs job
	 */
	public function create(\FoundryCo\Cloudflare\Requests\PostZonesZoneIdLogpushEdgeJobsRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/logpush/edge/jobs', \FoundryCo\Cloudflare\Responses\PostZonesZoneIdLogpushEdgeJobs::class, $request);
	}
}
