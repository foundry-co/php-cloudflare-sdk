<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/diagnostics/endpoint-healthchecks', \FoundryCo\Cloudflare\Responses\DiagnosticsEndpointHealthcheckList::class, []);
	}


	/**
	 * Endpoint Health Check
	 */
	public function create(\FoundryCo\Cloudflare\Requests\DiagnosticsEndpointHealthcheckCreateRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/diagnostics/endpoint-healthchecks', \FoundryCo\Cloudflare\Responses\DiagnosticsEndpointHealthcheckCreate::class, $request);
	}


	/**
	 * Get Endpoint Health Check
	 */
	public function get(string $id): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/diagnostics/endpoint-healthchecks/' . $id, \FoundryCo\Cloudflare\Responses\DiagnosticsEndpointHealthcheckGet::class, []);
	}


	/**
	 * Update Endpoint Health Check
	 */
	public function update(
		string $id,
		\FoundryCo\Cloudflare\Requests\DiagnosticsEndpointHealthcheckUpdateRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/diagnostics/endpoint-healthchecks/' . $id, \FoundryCo\Cloudflare\Responses\DiagnosticsEndpointHealthcheckUpdate::class, $request);
	}


	/**
	 * Delete Endpoint Health Check
	 */
	public function delete(string $id): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/diagnostics/endpoint-healthchecks/' . $id);
	}
}
