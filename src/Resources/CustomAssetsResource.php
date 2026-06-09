<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function get(
		string $zoneIdentifier,
		?int $page = null,
		?int $perPage = null,
	): \FoundryCo\Cloudflare\Responses\CustomAssetsForAZoneAssets
	{
		return $this->client->get('/zones/' . $zoneIdentifier . '/custom_pages/assets', \FoundryCo\Cloudflare\Responses\CustomAssetsForAZoneAssets::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create a custom asset
	 */
	public function create(
		string $zoneIdentifier,
		\FoundryCo\Cloudflare\Requests\CustomAssetsForAZoneCreateACustomAssetRequest $request,
	): \FoundryCo\Cloudflare\Responses\CustomAssetsForAZoneAsset
	{
		return $this->client->post('/zones/' . $zoneIdentifier . '/custom_pages/assets', \FoundryCo\Cloudflare\Responses\CustomAssetsForAZoneAsset::class, $request);
	}


	/**
	 * Get a custom asset
	 */
	public function assets(
		string $assetName,
		string $zoneIdentifier,
	): \FoundryCo\Cloudflare\Responses\CustomAssetsForAZoneAsset
	{
		return $this->client->get('/zones/' . $zoneIdentifier . '/custom_pages/assets/' . $assetName, \FoundryCo\Cloudflare\Responses\CustomAssetsForAZoneAsset::class, []);
	}


	/**
	 * Update a custom asset
	 */
	public function update(
		string $assetName,
		string $zoneIdentifier,
		\FoundryCo\Cloudflare\Requests\CustomAssetsForAZoneUpdateACustomAssetRequest $request,
	): \FoundryCo\Cloudflare\Responses\CustomAssetsForAZoneAsset
	{
		return $this->client->put('/zones/' . $zoneIdentifier . '/custom_pages/assets/' . $assetName, \FoundryCo\Cloudflare\Responses\CustomAssetsForAZoneAsset::class, $request);
	}


	/**
	 * Delete a custom asset
	 */
	public function delete(string $assetName, string $zoneIdentifier): void
	{
		$this->client->delete('/zones/' . $zoneIdentifier . '/custom_pages/assets/' . $assetName);
	}
}
