<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZoneAnalyticsDeprecatedResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get analytics by Co-locations
	 */
	public function get(
		string $zoneIdentifier,
		mixed $until = null,
		mixed $since = null,
		?bool $continuous = null,
	): mixed
	{
		return $this->client->get('/zones/' . $zoneIdentifier . '/analytics/colos', \FoundryCo\Cloudflare\Responses\ZoneAnalyticsDeprecatedGetAnalyticsByCoLocations::class, ['until' => $until ?? null, 'since' => $since ?? null, 'continuous' => $continuous ?? null]);
	}


	/**
	 * Get dashboard
	 */
	public function dashboard(
		string $zoneIdentifier,
		mixed $until = null,
		mixed $since = null,
		?bool $continuous = null,
	): mixed
	{
		return $this->client->get('/zones/' . $zoneIdentifier . '/analytics/dashboard', \FoundryCo\Cloudflare\Responses\ZoneAnalyticsDeprecatedGetDashboard::class, ['until' => $until ?? null, 'since' => $since ?? null, 'continuous' => $continuous ?? null]);
	}
}
