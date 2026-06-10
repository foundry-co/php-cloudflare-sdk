<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CustomAssetsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List custom assets
	 */
	public function get(string $zoneIdentifier, ?int $page = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/zones/' . $zoneIdentifier . '/custom_pages/assets', \FoundryCo\Cloudflare\Responses\CustomAssetsForAZoneListCustomAssets::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create a custom asset
	 */
	public function create(
		string $zoneIdentifier,
		\FoundryCo\Cloudflare\Requests\CustomAssetsForAZoneCreateACustomAssetRequest $request,
	): mixed
	{
		return $this->client->post('/zones/' . $zoneIdentifier . '/custom_pages/assets', \FoundryCo\Cloudflare\Responses\CustomAssetsForAZoneCreateACustomAsset::class, $request);
	}


	/**
	 * Get a custom asset
	 */
	public function assets(string $assetName, string $zoneIdentifier): mixed
	{
		return $this->client->get('/zones/' . $zoneIdentifier . '/custom_pages/assets/' . $assetName, \FoundryCo\Cloudflare\Responses\CustomAssetsForAZoneGetACustomAsset::class, []);
	}


	/**
	 * Update a custom asset
	 */
	public function update(
		string $assetName,
		string $zoneIdentifier,
		\FoundryCo\Cloudflare\Requests\CustomAssetsForAZoneUpdateACustomAssetRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $zoneIdentifier . '/custom_pages/assets/' . $assetName, \FoundryCo\Cloudflare\Responses\CustomAssetsForAZoneUpdateACustomAsset::class, $request);
	}


	/**
	 * Delete a custom asset
	 */
	public function delete(string $assetName, string $zoneIdentifier): void
	{
		$this->client->delete('/zones/' . $zoneIdentifier . '/custom_pages/assets/' . $assetName);
	}
}
