<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class EndpointHealthChecksResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Endpoint Health Checks
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\EndpointHealthChecksList
	{
		return $this->client->get('/accounts/' . $this->accountId . '/diagnostics/endpoint-healthchecks', \FoundryCo\Cloudflare\Responses\EndpointHealthChecksList::class, []);
	}


	/**
	 * Endpoint Health Check
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DiagnosticsEndpointHealthcheckCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\EndpointHealthChecksCreate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/diagnostics/endpoint-healthchecks', \FoundryCo\Cloudflare\Responses\EndpointHealthChecksCreate::class, $request);
	}


	/**
	 * Get Endpoint Health Check
	 */
	public function get(string $id): \FoundryCo\Cloudflare\Responses\EndpointHealthChecksGet
	{
		return $this->client->get('/accounts/' . $this->accountId . '/diagnostics/endpoint-healthchecks/' . $id, \FoundryCo\Cloudflare\Responses\EndpointHealthChecksGet::class, []);
	}


	/**
	 * Update Endpoint Health Check
	 */
	public function update(
		string $id,
		\FoundryCo\Cloudflare\Requests\DiagnosticsEndpointHealthcheckUpdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\EndpointHealthChecksUpdate
	{
		return $this->client->put('/accounts/' . $this->accountId . '/diagnostics/endpoint-healthchecks/' . $id, \FoundryCo\Cloudflare\Responses\EndpointHealthChecksUpdate::class, $request);
	}


	/**
	 * Delete Endpoint Health Check
	 */
	public function delete(string $id): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/diagnostics/endpoint-healthchecks/' . $id);
	}
}
