<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZoneEnvironmentsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List zone environments
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/environments', \FoundryCo\Cloudflare\Responses\ZonesEnvironmentsList::class, []);
	}


	/**
	 * Create zone environments
	 */
	public function create(\FoundryCo\Cloudflare\Requests\ZonesEnvironmentsCreateRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/environments', \FoundryCo\Cloudflare\Responses\ZonesEnvironmentsCreate::class, $request);
	}


	/**
	 * Upsert zone environments
	 */
	public function update(\FoundryCo\Cloudflare\Requests\ZonesEnvironmentsUpdateRequest $request): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/environments', \FoundryCo\Cloudflare\Responses\ZonesEnvironmentsUpdate::class, $request);
	}


	/**
	 * Partially update zone environments
	 */
	public function environments(\FoundryCo\Cloudflare\Requests\ZonesEnvironmentsEditRequest $request): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/environments', \FoundryCo\Cloudflare\Responses\ZonesEnvironmentsEdit::class, $request);
	}


	/**
	 * Delete zone environment
	 */
	public function delete(): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/environments/' . $environmentId);
	}


	/**
	 * Roll back zone environment
	 */
	public function rollback(): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/environments/' . $environmentId . '/rollback', \FoundryCo\Cloudflare\Responses\ZonesEnvironmentsRollback::class, null);
	}
}
