<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DLPSensitivityGroupsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Retrieve all sensitivity groups in an account
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/sensitivity_groups', \FoundryCo\Cloudflare\Responses\DlpSensitivityGroupsList::class, []);
	}


	/**
	 * Creates a new sensitivity group.
	 */
	public function create(\FoundryCo\Cloudflare\Requests\DlpSensitivityGroupsCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/sensitivity_groups', \FoundryCo\Cloudflare\Responses\DlpSensitivityGroupsCreate::class, $request);
	}


	/**
	 * Retrieve a specific sensitivity group.
	 */
	public function get(string $sensitivityGroupId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/sensitivity_groups/' . $sensitivityGroupId, \FoundryCo\Cloudflare\Responses\DlpSensitivityGroupsRead::class, []);
	}


	/**
	 * Update the attributes of a single sensitivity group.
	 */
	public function update(
		string $sensitivityGroupId,
		\FoundryCo\Cloudflare\Requests\DlpSensitivityGroupsUpdateRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/sensitivity_groups/' . $sensitivityGroupId, \FoundryCo\Cloudflare\Responses\DlpSensitivityGroupsUpdate::class, $request);
	}


	/**
	 * Delete a single sensitivity group.
	 */
	public function delete(string $sensitivityGroupId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dlp/sensitivity_groups/' . $sensitivityGroupId);
	}


	/**
	 * Retrieve the ordered list of level IDs for a sensitivity group.
	 */
	public function levelOrder(string $sensitivityGroupId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/sensitivity_groups/' . $sensitivityGroupId . '/level_order', \FoundryCo\Cloudflare\Responses\DlpSensitivityGroupsGetLevelOrder::class, []);
	}


	/**
	 * Set the ordering of levels within a sensitivity group.
	 */
	public function dlpSensitivityGroupsPutLevelOrder(
		string $sensitivityGroupId,
		\FoundryCo\Cloudflare\Requests\DlpSensitivityGroupsPutLevelOrderRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/sensitivity_groups/' . $sensitivityGroupId . '/level_order', \FoundryCo\Cloudflare\Responses\DlpSensitivityGroupsPutLevelOrder::class, $request);
	}
}
