<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DLPSensitivityLevelsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Retrieve all sensitivity levels in a sensitivity group
	 */
	public function get(string $sensitivityGroupId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/sensitivity_groups/' . $sensitivityGroupId . '/levels', \FoundryCo\Cloudflare\Responses\DlpSensitivityLevelsList::class, []);
	}


	/**
	 * Creates a new sensitivity level.
	 */
	public function create(
		string $sensitivityGroupId,
		\FoundryCo\Cloudflare\Requests\DlpSensitivityLevelsCreateRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/sensitivity_groups/' . $sensitivityGroupId . '/levels', \FoundryCo\Cloudflare\Responses\DlpSensitivityLevelsCreate::class, $request);
	}


	/**
	 * Retrieve a specific sensitivity level.
	 */
	public function levels(string $sensitivityGroupId, string $sensitivityLevelId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/sensitivity_groups/' . $sensitivityGroupId . '/levels/' . $sensitivityLevelId, \FoundryCo\Cloudflare\Responses\DlpSensitivityLevelsRead::class, []);
	}


	/**
	 * Update the attributes of a single sensitivity level.
	 */
	public function update(
		string $sensitivityGroupId,
		string $sensitivityLevelId,
		\FoundryCo\Cloudflare\Requests\DlpSensitivityLevelsUpdateRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/sensitivity_groups/' . $sensitivityGroupId . '/levels/' . $sensitivityLevelId, \FoundryCo\Cloudflare\Responses\DlpSensitivityLevelsUpdate::class, $request);
	}


	/**
	 * Delete a single sensitivity level.
	 */
	public function delete(string $sensitivityGroupId, string $sensitivityLevelId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dlp/sensitivity_groups/' . $sensitivityGroupId . '/levels/' . $sensitivityLevelId);
	}
}
