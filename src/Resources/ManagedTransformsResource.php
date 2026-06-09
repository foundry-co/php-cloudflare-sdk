<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ManagedTransformsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List Managed Transforms
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/managed_headers', null, []);
	}


	/**
	 * Update Managed Transforms
	 */
	public function update(\FoundryCo\Cloudflare\Requests\UpdateManagedTransformsRequest $request): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/managed_headers', null, $request);
	}


	/**
	 * Delete Managed Transforms
	 */
	public function delete(): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/managed_headers');
	}
}
