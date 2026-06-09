<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarMarkdownForAgentsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get AI markdown for agents reduction ratio summary
	 */
	public function list(
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?\FoundryCo\Cloudflare\Enums\RadarMarkdownForAgentsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarMarkdownForAgentsSummary
	{
		return $this->client->get('/radar/ai/markdown_for_agents/summary', \FoundryCo\Cloudflare\Responses\RadarMarkdownForAgentsSummary::class, ['name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'format' => $format ?? null]);
	}


	/**
	 * Get AI markdown for agents reduction ratio time series
	 */
	public function timeseries(
		?\FoundryCo\Cloudflare\Enums\RadarMarkdownForAgentsAggInterval $aggInterval = null,
		?array $name = null,
		?array $dateRange = null,
		?array $dateStart = null,
		?array $dateEnd = null,
		?\FoundryCo\Cloudflare\Enums\RadarMarkdownForAgentsFormat $format = null,
	): \FoundryCo\Cloudflare\Responses\RadarMarkdownForAgentsTimeseries
	{
		return $this->client->get('/radar/ai/markdown_for_agents/timeseries', \FoundryCo\Cloudflare\Responses\RadarMarkdownForAgentsTimeseries::class, ['aggInterval' => $aggInterval ?? null, 'name' => $name ?? null, 'dateRange' => $dateRange ?? null, 'dateStart' => $dateStart ?? null, 'dateEnd' => $dateEnd ?? null, 'format' => $format ?? null]);
	}
}
