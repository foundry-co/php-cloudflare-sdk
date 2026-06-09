<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SpectrumAnalyticsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get current aggregated analytics
	 */
	public function list(
		?string $appID = null,
		?string $coloName = null,
	): \FoundryCo\Cloudflare\Responses\SpectrumAnalyticsAnalytics
	{
		return $this->client->get('/zones/' . $this->zoneId . '/spectrum/analytics/aggregate/current', \FoundryCo\Cloudflare\Responses\SpectrumAnalyticsAnalytics::class, ['appID' => $appID ?? null, 'coloName' => $coloName ?? null]);
	}


	/**
	 * Get analytics by time
	 */
	public function bytime(
		?array $dimensions = null,
		?array $sort = null,
		mixed $until = null,
		?array $metrics = null,
		?string $filters = null,
		mixed $since = null,
		?\FoundryCo\Cloudflare\Enums\SpectrumAnalyticsTimeDelta $timeDelta = null,
	): \FoundryCo\Cloudflare\Responses\SpectrumAnalyticsTime
	{
		return $this->client->get('/zones/' . $this->zoneId . '/spectrum/analytics/events/bytime', \FoundryCo\Cloudflare\Responses\SpectrumAnalyticsTime::class, ['dimensions' => $dimensions ?? null, 'sort' => $sort ?? null, 'until' => $until ?? null, 'metrics' => $metrics ?? null, 'filters' => $filters ?? null, 'since' => $since ?? null, 'timeDelta' => $timeDelta ?? null]);
	}


	/**
	 * Get analytics summary
	 */
	public function summary(
		?array $dimensions = null,
		?array $sort = null,
		mixed $until = null,
		?array $metrics = null,
		?string $filters = null,
		mixed $since = null,
	): \FoundryCo\Cloudflare\Responses\SpectrumAnalyticsSummary
	{
		return $this->client->get('/zones/' . $this->zoneId . '/spectrum/analytics/events/summary', \FoundryCo\Cloudflare\Responses\SpectrumAnalyticsSummary::class, ['dimensions' => $dimensions ?? null, 'sort' => $sort ?? null, 'until' => $until ?? null, 'metrics' => $metrics ?? null, 'filters' => $filters ?? null, 'since' => $since ?? null]);
	}
}
