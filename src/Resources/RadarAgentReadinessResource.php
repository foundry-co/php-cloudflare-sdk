<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RadarAgentReadinessResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get agent readiness summary
	 */
	public function get(
		\FoundryCo\Cloudflare\Enums\RadarAgentReadinessDimension $dimension,
		?\DateTimeImmutable $date = null,
		?array $domainCategory = null,
		?array $name = null,
		?\FoundryCo\Cloudflare\Enums\RadarAgentReadinessFormat $format = null,
	): mixed
	{
		return $this->client->get('/radar/agent_readiness/summary/' . $dimension, \FoundryCo\Cloudflare\Responses\RadarGetAgentReadinessSummary::class, ['date' => $date ?? null, 'domainCategory' => $domainCategory ?? null, 'name' => $name ?? null, 'format' => $format ?? null]);
	}
}
