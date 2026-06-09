<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\LoadBalancerMonitorsMonitors
	{
		return $this->client->get('/user/load_balancers/monitors', \FoundryCo\Cloudflare\Responses\LoadBalancerMonitorsMonitors::class, []);
	}


	/**
	 * Create Monitor
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\LoadBalancerMonitorsCreateMonitorRequest $request,
	): \FoundryCo\Cloudflare\Responses\LoadBalancerMonitorsMonitor
	{
		return $this->client->post('/user/load_balancers/monitors', \FoundryCo\Cloudflare\Responses\LoadBalancerMonitorsMonitor::class, $request);
	}


	/**
	 * Monitor Details
	 */
	public function get(string $monitorId): \FoundryCo\Cloudflare\Responses\LoadBalancerMonitorsDetails
	{
		return $this->client->get('/user/load_balancers/monitors/' . $monitorId, \FoundryCo\Cloudflare\Responses\LoadBalancerMonitorsDetails::class, []);
	}


	/**
	 * Update Monitor
	 */
	public function update(
		string $monitorId,
		\FoundryCo\Cloudflare\Requests\LoadBalancerMonitorsUpdateMonitorRequest $request,
	): \FoundryCo\Cloudflare\Responses\LoadBalancerMonitorsMonitor
	{
		return $this->client->put('/user/load_balancers/monitors/' . $monitorId, \FoundryCo\Cloudflare\Responses\LoadBalancerMonitorsMonitor::class, $request);
	}


	/**
	 * Patch Monitor
	 */
	public function monitors(
		string $monitorId,
		\FoundryCo\Cloudflare\Requests\LoadBalancerMonitorsPatchMonitorRequest $request,
	): \FoundryCo\Cloudflare\Responses\LoadBalancerMonitorsMonitor
	{
		return $this->client->patch('/user/load_balancers/monitors/' . $monitorId, \FoundryCo\Cloudflare\Responses\LoadBalancerMonitorsMonitor::class, $request);
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
	): \FoundryCo\Cloudflare\Responses\LoadBalancerMonitorsMonitor
	{
		return $this->client->post('/user/load_balancers/monitors/' . $monitorId . '/preview', \FoundryCo\Cloudflare\Responses\LoadBalancerMonitorsMonitor::class, $request);
	}


	/**
	 * List Monitor References
	 */
	public function references(string $monitorId): \FoundryCo\Cloudflare\Responses\LoadBalancerMonitorsReferences
	{
		return $this->client->get('/user/load_balancers/monitors/' . $monitorId . '/references', \FoundryCo\Cloudflare\Responses\LoadBalancerMonitorsReferences::class, []);
	}


	/**
	 * Preview Result
	 */
	public function loadBalancerMonitorsPreviewResult(array $previewId): mixed
	{
		return $this->client->get('/user/load_balancers/preview/' . $previewId, null, []);
	}
}
