<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(?int $page = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/deployment-groups', \FoundryCo\Cloudflare\Responses\ListDeploymentGroups::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create deployment group
	 */
	public function create(\FoundryCo\Cloudflare\Requests\CreateDeploymentGroupRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/devices/deployment-groups', \FoundryCo\Cloudflare\Responses\CreateDeploymentGroup::class, $request);
	}


	/**
	 * Get deployment group
	 */
	public function get(string $groupId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/devices/deployment-groups/' . $groupId, \FoundryCo\Cloudflare\Responses\GetDeploymentGroup::class, []);
	}


	/**
	 * Update deployment group
	 */
	public function update(string $groupId, \FoundryCo\Cloudflare\Requests\UpdateDeploymentGroupRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/devices/deployment-groups/' . $groupId, \FoundryCo\Cloudflare\Responses\UpdateDeploymentGroup::class, $request);
	}


	/**
	 * Delete deployment group
	 */
	public function delete(string $groupId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/devices/deployment-groups/' . $groupId);
	}
}
