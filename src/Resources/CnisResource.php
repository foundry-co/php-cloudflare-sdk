<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CnisResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List existing CNI objects
	 */
	public function list(?string $slot = null, ?string $tunnelId = null, ?int $cursor = null, ?int $limit = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cni/cnis', null, ['slot' => $slot ?? null, 'tunnelId' => $tunnelId ?? null, 'cursor' => $cursor ?? null, 'limit' => $limit ?? null]);
	}


	/**
	 * Create a new CNI object
	 */
	public function create(\FoundryCo\Cloudflare\Requests\CreateCniRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cni/cnis', null, $request);
	}


	/**
	 * Get information about a CNI object
	 */
	public function get(string $cni): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cni/cnis/' . $cni, null, []);
	}


	/**
	 * Modify stored information about a CNI object
	 */
	public function update(string $cni, \FoundryCo\Cloudflare\Requests\UpdateCniRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/cni/cnis/' . $cni, null, $request);
	}


	/**
	 * Delete a specified CNI object
	 */
	public function delete(string $cni): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cni/cnis/' . $cni);
	}
}
