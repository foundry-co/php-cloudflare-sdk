<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DeploymentGroupsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List deployment groups
	 */
	public function list(?int $page = null, ?int $perPage = null): \FoundryCo\Cloudflare\Responses\DeploymentGroupsGroups
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/deployment-groups', \FoundryCo\Cloudflare\Responses\DeploymentGroupsGroups::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create deployment group
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\CreateDeploymentGroupRequest $request,
	): \FoundryCo\Cloudflare\Responses\DeploymentGroupsGroup
	{
		return $this->client->post('/accounts/' . $this->accountId . '/devices/deployment-groups', \FoundryCo\Cloudflare\Responses\DeploymentGroupsGroup::class, $request);
	}


	/**
	 * Get deployment group
	 */
	public function get(string $groupId): \FoundryCo\Cloudflare\Responses\DeploymentGroupsGroup
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/deployment-groups/' . $groupId, \FoundryCo\Cloudflare\Responses\DeploymentGroupsGroup::class, []);
	}


	/**
	 * Update deployment group
	 */
	public function update(
		string $groupId,
		\FoundryCo\Cloudflare\Requests\UpdateDeploymentGroupRequest $request,
	): \FoundryCo\Cloudflare\Responses\DeploymentGroupsGroup
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/devices/deployment-groups/' . $groupId, \FoundryCo\Cloudflare\Responses\DeploymentGroupsGroup::class, $request);
	}


	/**
	 * Delete deployment group
	 */
	public function delete(string $groupId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/devices/deployment-groups/' . $groupId);
	}
}
