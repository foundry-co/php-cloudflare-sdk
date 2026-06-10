<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class LogsReceivedResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get log retention flag
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/logs/control/retention/flag', \FoundryCo\Cloudflare\Responses\GetZonesZoneIdLogsControlRetentionFlag::class, []);
	}


	/**
	 * Update log retention flag
	 */
	public function create(\FoundryCo\Cloudflare\Requests\PostZonesZoneIdLogsControlRetentionFlagRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/logs/control/retention/flag', \FoundryCo\Cloudflare\Responses\PostZonesZoneIdLogsControlRetentionFlag::class, $request);
	}


	/**
	 * Get logs RayIDs
	 */
	public function get(
		string $rayId,
		?string $fields = null,
		?\FoundryCo\Cloudflare\Enums\LogsReceivedTimestamps $timestamps = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/logs/rayids/' . $rayId, null, ['fields' => $fields ?? null, 'timestamps' => $timestamps ?? null]);
	}


	/**
	 * Get logs received
	 */
	public function received(
		mixed $start = null,
		mixed $end = null,
		?string $fields = null,
		?float $sample = null,
		?int $count = null,
		?\FoundryCo\Cloudflare\Enums\LogsReceivedTimestamps $timestamps = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/logs/received', null, ['start' => $start ?? null, 'end' => $end ?? null, 'fields' => $fields ?? null, 'sample' => $sample ?? null, 'count' => $count ?? null, 'timestamps' => $timestamps ?? null]);
	}


	/**
	 * List fields
	 */
	public function fields(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/logs/received/fields', null, []);
	}
}
