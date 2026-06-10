<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class LoadBalancerMonitorsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List Monitors
	 */
	public function list(): mixed
	{
		return $this->client->get('/user/load_balancers/monitors', \FoundryCo\Cloudflare\Responses\LoadBalancerMonitorsListMonitors::class, []);
	}


	/**
	 * Create Monitor
	 */
	public function create(\FoundryCo\Cloudflare\Requests\LoadBalancerMonitorsCreateMonitorRequest $request): mixed
	{
		return $this->client->post('/user/load_balancers/monitors', \FoundryCo\Cloudflare\Responses\LoadBalancerMonitorsCreateMonitor::class, $request);
	}


	/**
	 * Monitor Details
	 */
	public function get(string $monitorId): mixed
	{
		return $this->client->get('/user/load_balancers/monitors/' . $monitorId, \FoundryCo\Cloudflare\Responses\LoadBalancerMonitorsMonitorDetails::class, []);
	}


	/**
	 * Update Monitor
	 */
	public function update(
		string $monitorId,
		\FoundryCo\Cloudflare\Requests\LoadBalancerMonitorsUpdateMonitorRequest $request,
	): mixed
	{
		return $this->client->put('/user/load_balancers/monitors/' . $monitorId, \FoundryCo\Cloudflare\Responses\LoadBalancerMonitorsUpdateMonitor::class, $request);
	}


	/**
	 * Patch Monitor
	 */
	public function monitors(
		string $monitorId,
		\FoundryCo\Cloudflare\Requests\LoadBalancerMonitorsPatchMonitorRequest $request,
	): mixed
	{
		return $this->client->patch('/user/load_balancers/monitors/' . $monitorId, \FoundryCo\Cloudflare\Responses\LoadBalancerMonitorsPatchMonitor::class, $request);
	}


	/**
	 * Delete Monitor
	 */
	public function delete(string $monitorId): void
	{
		$this->client->delete('/user/load_balancers/monitors/' . $monitorId);
	}


	/**
	 * Preview Monitor
	 */
	public function preview(
		string $monitorId,
		\FoundryCo\Cloudflare\Requests\LoadBalancerMonitorsPreviewMonitorRequest $request,
	): mixed
	{
		return $this->client->post('/user/load_balancers/monitors/' . $monitorId . '/preview', \FoundryCo\Cloudflare\Responses\LoadBalancerMonitorsPreviewMonitor::class, $request);
	}


	/**
	 * List Monitor References
	 */
	public function references(string $monitorId): mixed
	{
		return $this->client->get('/user/load_balancers/monitors/' . $monitorId . '/references', \FoundryCo\Cloudflare\Responses\LoadBalancerMonitorsListMonitorReferences::class, []);
	}


	/**
	 * Preview Result
	 */
	public function loadBalancerMonitorsPreviewResult(array $previewId): mixed
	{
		return $this->client->get('/user/load_balancers/preview/' . $previewId, null, []);
	}
}
