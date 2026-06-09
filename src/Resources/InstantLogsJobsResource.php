<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\InstantLogsJobsForAZoneJobs
	{
		return $this->client->get('/zones/' . $this->zoneId . '/logpush/edge/jobs', \FoundryCo\Cloudflare\Responses\InstantLogsJobsForAZoneJobs::class, []);
	}


	/**
	 * Create Instant Logs job
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\PostZonesZoneIdLogpushEdgeJobsRequest $request,
	): \FoundryCo\Cloudflare\Responses\InstantLogsJobsForAZoneJobs
	{
		return $this->client->post('/zones/' . $this->zoneId . '/logpush/edge/jobs', \FoundryCo\Cloudflare\Responses\InstantLogsJobsForAZoneJobs::class, $request);
	}
}
