<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SpectrumApplicationsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List Spectrum applications
	 */
	public function list(
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\SpectrumApplicationsDirection $direction = null,
		?\FoundryCo\Cloudflare\Enums\SpectrumApplicationsOrder $order = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/spectrum/apps', null, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'direction' => $direction ?? null, 'order' => $order ?? null]);
	}


	/**
	 * Create Spectrum application using a name for the origin
	 */
	public function create(): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/spectrum/apps', null, null);
	}


	/**
	 * Get Spectrum application configuration
	 */
	public function get(mixed $appId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/spectrum/apps/' . $appId, null, []);
	}


	/**
	 * Update Spectrum application configuration using a name for the origin
	 */
	public function update(mixed $appId): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/spectrum/apps/' . $appId, null, null);
	}


	/**
	 * Delete Spectrum application
	 */
	public function delete(mixed $appId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/spectrum/apps/' . $appId);
	}
}
