<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\HyperdriveHyperdrive
	{
		return $this->client->get('/accounts/' . $this->accountId . '/hyperdrive/configs', \FoundryCo\Cloudflare\Responses\HyperdriveHyperdrive::class, []);
	}


	/**
	 * Create Hyperdrive
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\CreateHyperdriveRequest $request,
	): \FoundryCo\Cloudflare\Responses\HyperdriveHyperdrive
	{
		return $this->client->post('/accounts/' . $this->accountId . '/hyperdrive/configs', \FoundryCo\Cloudflare\Responses\HyperdriveHyperdrive::class, $request);
	}


	/**
	 * Get Hyperdrive
	 */
	public function get(string $hyperdriveId): \FoundryCo\Cloudflare\Responses\HyperdriveHyperdrive
	{
		return $this->client->get('/accounts/' . $this->accountId . '/hyperdrive/configs/' . $hyperdriveId, \FoundryCo\Cloudflare\Responses\HyperdriveHyperdrive::class, []);
	}


	/**
	 * Update Hyperdrive
	 */
	public function update(
		string $hyperdriveId,
		\FoundryCo\Cloudflare\Requests\UpdateHyperdriveRequest $request,
	): \FoundryCo\Cloudflare\Responses\HyperdriveHyperdrive
	{
		return $this->client->put('/accounts/' . $this->accountId . '/hyperdrive/configs/' . $hyperdriveId, \FoundryCo\Cloudflare\Responses\HyperdriveHyperdrive::class, $request);
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
