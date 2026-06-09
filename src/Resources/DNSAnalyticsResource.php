<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DNSAnalyticsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Table
	 */
	public function list(
		?string $metrics = null,
		?string $dimensions = null,
		?\DateTimeImmutable $since = null,
		?\DateTimeImmutable $until = null,
		?int $limit = null,
		?string $sort = null,
		?string $filters = null,
	): \FoundryCo\Cloudflare\Responses\DNSAnalyticsTable
	{
		return $this->client->get('/zones/' . $this->zoneId . '/dns_analytics/report', \FoundryCo\Cloudflare\Responses\DNSAnalyticsTable::class, ['metrics' => $metrics ?? null, 'dimensions' => $dimensions ?? null, 'since' => $since ?? null, 'until' => $until ?? null, 'limit' => $limit ?? null, 'sort' => $sort ?? null, 'filters' => $filters ?? null]);
	}


	/**
	 * By Time
	 */
	public function bytime(
		?string $metrics = null,
		?string $dimensions = null,
		?\DateTimeImmutable $since = null,
		?\DateTimeImmutable $until = null,
		?int $limit = null,
		?string $sort = null,
		?string $filters = null,
		?\FoundryCo\Cloudflare\Enums\DNSAnalyticsTimeDelta $timeDelta = null,
	): \FoundryCo\Cloudflare\Responses\DNSAnalyticsTime
	{
		return $this->client->get('/zones/' . $this->zoneId . '/dns_analytics/report/bytime', \FoundryCo\Cloudflare\Responses\DNSAnalyticsTime::class, ['metrics' => $metrics ?? null, 'dimensions' => $dimensions ?? null, 'since' => $since ?? null, 'until' => $until ?? null, 'limit' => $limit ?? null, 'sort' => $sort ?? null, 'filters' => $filters ?? null, 'timeDelta' => $timeDelta ?? null]);
	}
}
