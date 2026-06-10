<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class HyperdriveResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Hyperdrives
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/hyperdrive/configs', \FoundryCo\Cloudflare\Responses\ListHyperdrive::class, []);
	}


	/**
	 * Create Hyperdrive
	 */
	public function create(\FoundryCo\Cloudflare\Requests\CreateHyperdriveRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/hyperdrive/configs', \FoundryCo\Cloudflare\Responses\CreateHyperdrive::class, $request);
	}


	/**
	 * Get Hyperdrive
	 */
	public function get(string $hyperdriveId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/hyperdrive/configs/' . $hyperdriveId, \FoundryCo\Cloudflare\Responses\GetHyperdrive::class, []);
	}


	/**
	 * Update Hyperdrive
	 */
	public function update(string $hyperdriveId, \FoundryCo\Cloudflare\Requests\UpdateHyperdriveRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/hyperdrive/configs/' . $hyperdriveId, \FoundryCo\Cloudflare\Responses\UpdateHyperdrive::class, $request);
	}


	/**
	 * Patch Hyperdrive
	 */
	public function configs(string $hyperdriveId, \FoundryCo\Cloudflare\Requests\PatchHyperdriveRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/hyperdrive/configs/' . $hyperdriveId, null, $request);
	}


	/**
	 * Delete Hyperdrive
	 */
	public function delete(string $hyperdriveId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/hyperdrive/configs/' . $hyperdriveId);
	}
}
