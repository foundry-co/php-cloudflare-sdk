<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class PermissionsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List permissions for dataset
	 */
	public function get(string $datasetId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/' . $datasetId . '/permissions', null, []);
	}


	/**
	 * Create a permission for dataset
	 */
	public function create(string $datasetId, \FoundryCo\Cloudflare\Requests\PostPermissionCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/' . $datasetId . '/permissions', null, $request);
	}


	/**
	 * Update a permission for dataset
	 */
	public function update(
		string $datasetId,
		string $grantId,
		\FoundryCo\Cloudflare\Requests\PutPermissionUpdateRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/' . $datasetId . '/permissions/' . $grantId, null, $request);
	}


	/**
	 * Delete a permission for dataset
	 */
	public function delete(string $datasetId, string $grantId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/events/dataset/' . $datasetId . '/permissions/' . $grantId);
	}
}
