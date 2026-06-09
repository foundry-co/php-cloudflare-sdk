<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ConnectivityServicesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Workers VPC connectivity services
	 */
	public function list(mixed $type = null, ?int $page = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/connectivity/directory/services', null, ['type' => $type ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create Workers VPC connectivity service
	 */
	public function create(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/connectivity/directory/services', null, null);
	}


	/**
	 * Get Workers VPC connectivity service
	 */
	public function get(string $serviceId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/connectivity/directory/services/' . $serviceId, null, []);
	}


	/**
	 * Update Workers VPC connectivity service
	 */
	public function update(string $serviceId): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/connectivity/directory/services/' . $serviceId, null, null);
	}


	/**
	 * Delete Workers VPC connectivity service
	 */
	public function delete(string $serviceId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/connectivity/directory/services/' . $serviceId);
	}
}
