<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccountLoadBalancerMonitorsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Monitors
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/load_balancers/monitors', \FoundryCo\Cloudflare\Responses\AccountLoadBalancerMonitorsListMonitors::class, []);
	}


	/**
	 * Create Monitor
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\AccountLoadBalancerMonitorsCreateMonitorRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/load_balancers/monitors', \FoundryCo\Cloudflare\Responses\AccountLoadBalancerMonitorsCreateMonitor::class, $request);
	}


	/**
	 * Monitor Details
	 */
	public function get(string $monitorId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/load_balancers/monitors/' . $monitorId, \FoundryCo\Cloudflare\Responses\AccountLoadBalancerMonitorsMonitorDetails::class, []);
	}


	/**
	 * Update Monitor
	 */
	public function update(
		string $monitorId,
		\FoundryCo\Cloudflare\Requests\AccountLoadBalancerMonitorsUpdateMonitorRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/load_balancers/monitors/' . $monitorId, \FoundryCo\Cloudflare\Responses\AccountLoadBalancerMonitorsUpdateMonitor::class, $request);
	}


	/**
	 * Patch Monitor
	 */
	public function monitors(
		string $monitorId,
		\FoundryCo\Cloudflare\Requests\AccountLoadBalancerMonitorsPatchMonitorRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/load_balancers/monitors/' . $monitorId, \FoundryCo\Cloudflare\Responses\AccountLoadBalancerMonitorsPatchMonitor::class, $request);
	}


	/**
	 * Delete Monitor
	 */
	public function delete(string $monitorId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/load_balancers/monitors/' . $monitorId);
	}


	/**
	 * Preview Monitor
	 */
	public function preview(
		string $monitorId,
		\FoundryCo\Cloudflare\Requests\AccountLoadBalancerMonitorsPreviewMonitorRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/load_balancers/monitors/' . $monitorId . '/preview', \FoundryCo\Cloudflare\Responses\AccountLoadBalancerMonitorsPreviewMonitor::class, $request);
	}


	/**
	 * List Monitor References
	 */
	public function references(string $monitorId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/load_balancers/monitors/' . $monitorId . '/references', \FoundryCo\Cloudflare\Responses\AccountLoadBalancerMonitorsListMonitorReferences::class, []);
	}


	/**
	 * Preview Result
	 */
	public function accountLoadBalancerMonitorsPreviewResult(string $previewId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/load_balancers/preview/' . $previewId, null, []);
	}
}
