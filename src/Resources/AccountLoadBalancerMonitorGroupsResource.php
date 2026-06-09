<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccountLoadBalancerMonitorGroupsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Monitor Groups
	 */
	public function list(): \FoundryCo\Cloudflare\Support\PaginatedResponse
	{
		return $this->client->get('/accounts/' . $this->accountId . '/load_balancers/monitor_groups', \FoundryCo\Cloudflare\Responses\AccountLoadBalancerMonitorGroupsGroups::class, []);
	}


	/**
	 * Create Monitor Group
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\AccountLoadBalancerMonitorGroupsCreateMonitorGroupRequest $request,
	): \FoundryCo\Cloudflare\Responses\AccountLoadBalancerMonitorGroupsGroup
	{
		return $this->client->post('/accounts/' . $this->accountId . '/load_balancers/monitor_groups', \FoundryCo\Cloudflare\Responses\AccountLoadBalancerMonitorGroupsGroup::class, $request);
	}


	/**
	 * Monitor Group Details
	 */
	public function get(string $monitorGroupId): \FoundryCo\Cloudflare\Responses\AccountLoadBalancerMonitorGroupsDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/load_balancers/monitor_groups/' . $monitorGroupId, \FoundryCo\Cloudflare\Responses\AccountLoadBalancerMonitorGroupsDetails::class, []);
	}


	/**
	 * Update Monitor Group
	 */
	public function update(
		string $monitorGroupId,
		\FoundryCo\Cloudflare\Requests\AccountLoadBalancerMonitorGroupsUpdateMonitorGroupRequest $request,
	): \FoundryCo\Cloudflare\Responses\AccountLoadBalancerMonitorGroupsGroup
	{
		return $this->client->put('/accounts/' . $this->accountId . '/load_balancers/monitor_groups/' . $monitorGroupId, \FoundryCo\Cloudflare\Responses\AccountLoadBalancerMonitorGroupsGroup::class, $request);
	}


	/**
	 * Patch Monitor Group
	 */
	public function monitorGroups(
		string $monitorGroupId,
		\FoundryCo\Cloudflare\Requests\AccountLoadBalancerMonitorGroupsPatchMonitorGroupRequest $request,
	): \FoundryCo\Cloudflare\Responses\AccountLoadBalancerMonitorGroupsGroup
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/load_balancers/monitor_groups/' . $monitorGroupId, \FoundryCo\Cloudflare\Responses\AccountLoadBalancerMonitorGroupsGroup::class, $request);
	}


	/**
	 * Delete Monitor Group
	 */
	public function delete(string $monitorGroupId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/load_balancers/monitor_groups/' . $monitorGroupId);
	}


	/**
	 * List Monitor Group References
	 */
	public function references(
		string $monitorGroupId,
	): \FoundryCo\Cloudflare\Responses\AccountLoadBalancerMonitorGroupsReferences
	{
		return $this->client->get('/accounts/' . $this->accountId . '/load_balancers/monitor_groups/' . $monitorGroupId . '/references', \FoundryCo\Cloudflare\Responses\AccountLoadBalancerMonitorGroupsReferences::class, []);
	}
}
