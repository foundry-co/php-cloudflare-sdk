<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class PresetsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Fetch all presets
	 */
	public function get(string $appId, ?float $perPage = null, ?float $pageNo = null, ?string $search = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/presets', null, ['perPage' => $perPage ?? null, 'pageNo' => $pageNo ?? null, 'search' => $search ?? null]);
	}


	/**
	 * Create a preset
	 */
	public function create(string $appId, \FoundryCo\Cloudflare\Requests\PostPresetsRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/presets', null, $request);
	}


	/**
	 * Fetch details of a preset
	 */
	public function presets(string $appId, string $presetId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/presets/' . $presetId, null, []);
	}


	/**
	 * Replace a preset
	 */
	public function update(
		string $appId,
		string $presetId,
		\FoundryCo\Cloudflare\Requests\PutPresetsPresetIdRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/presets/' . $presetId, null, $request);
	}


	/**
	 * Update a preset
	 */
	public function patchPresetsPresetId(
		string $appId,
		string $presetId,
		\FoundryCo\Cloudflare\Requests\PatchPresetsPresetIdRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/presets/' . $presetId, null, $request);
	}


	/**
	 * Delete a preset
	 */
	public function delete(string $appId, string $presetId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/realtime/kit/' . $appId . '/presets/' . $presetId);
	}
}
