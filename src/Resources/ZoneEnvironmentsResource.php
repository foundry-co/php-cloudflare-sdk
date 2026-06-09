<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\ZoneEnvironmentsZonesEnvironmentsList
	{
		return $this->client->get('/zones/' . $this->zoneId . '/environments', \FoundryCo\Cloudflare\Responses\ZoneEnvironmentsZonesEnvironmentsList::class, []);
	}


	/**
	 * Create zone environments
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\ZonesEnvironmentsCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZoneEnvironmentsZonesEnvironmentsCreate
	{
		return $this->client->post('/zones/' . $this->zoneId . '/environments', \FoundryCo\Cloudflare\Responses\ZoneEnvironmentsZonesEnvironmentsCreate::class, $request);
	}


	/**
	 * Upsert zone environments
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\ZonesEnvironmentsUpdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZoneEnvironmentsZonesEnvironmentsUpdate
	{
		return $this->client->put('/zones/' . $this->zoneId . '/environments', \FoundryCo\Cloudflare\Responses\ZoneEnvironmentsZonesEnvironmentsUpdate::class, $request);
	}


	/**
	 * Partially update zone environments
	 */
	public function environments(
		\FoundryCo\Cloudflare\Requests\ZonesEnvironmentsEditRequest $request,
	): \FoundryCo\Cloudflare\Responses\ZoneEnvironmentsZonesEnvironmentsEdit
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/environments', \FoundryCo\Cloudflare\Responses\ZoneEnvironmentsZonesEnvironmentsEdit::class, $request);
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
	public function rollback(): \FoundryCo\Cloudflare\Responses\ZoneEnvironmentsZonesEnvironmentsRollback
	{
		return $this->client->post('/zones/' . $this->zoneId . '/environments/' . $environmentId . '/rollback', \FoundryCo\Cloudflare\Responses\ZoneEnvironmentsZonesEnvironmentsRollback::class, null);
	}
}
