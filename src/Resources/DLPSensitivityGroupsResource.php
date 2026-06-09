<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\DLPSensitivityGroupsList
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/sensitivity_groups', \FoundryCo\Cloudflare\Responses\DLPSensitivityGroupsList::class, []);
	}


	/**
	 * Creates a new sensitivity group.
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DlpSensitivityGroupsCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPSensitivityGroupsCreate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/sensitivity_groups', \FoundryCo\Cloudflare\Responses\DLPSensitivityGroupsCreate::class, $request);
	}


	/**
	 * Retrieve a specific sensitivity group.
	 */
	public function get(string $sensitivityGroupId): \FoundryCo\Cloudflare\Responses\DLPSensitivityGroupsRead
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/sensitivity_groups/' . $sensitivityGroupId, \FoundryCo\Cloudflare\Responses\DLPSensitivityGroupsRead::class, []);
	}


	/**
	 * Update the attributes of a single sensitivity group.
	 */
	public function update(
		string $sensitivityGroupId,
		\FoundryCo\Cloudflare\Requests\DlpSensitivityGroupsUpdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPSensitivityGroupsUpdate
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/sensitivity_groups/' . $sensitivityGroupId, \FoundryCo\Cloudflare\Responses\DLPSensitivityGroupsUpdate::class, $request);
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
	public function levelOrder(string $sensitivityGroupId): \FoundryCo\Cloudflare\Responses\DLPSensitivityGroupsOrder
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/sensitivity_groups/' . $sensitivityGroupId . '/level_order', \FoundryCo\Cloudflare\Responses\DLPSensitivityGroupsOrder::class, []);
	}


	/**
	 * Set the ordering of levels within a sensitivity group.
	 */
	public function dlpSensitivityGroupsPutLevelOrder(
		string $sensitivityGroupId,
		\FoundryCo\Cloudflare\Requests\DlpSensitivityGroupsPutLevelOrderRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPSensitivityGroupsOrder
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/sensitivity_groups/' . $sensitivityGroupId . '/level_order', \FoundryCo\Cloudflare\Responses\DLPSensitivityGroupsOrder::class, $request);
	}
}
