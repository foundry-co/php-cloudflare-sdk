<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CloudIntegrationsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Cloud Integrations
	 */
	public function list(
		?bool $status = null,
		?string $orderBy = null,
		?bool $desc = null,
		?bool $cloudflare = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/cloud/providers', \FoundryCo\Cloudflare\Responses\ProvidersList::class, ['status' => $status ?? null, 'orderBy' => $orderBy ?? null, 'desc' => $desc ?? null, 'cloudflare' => $cloudflare ?? null]);
	}


	/**
	 * Create Cloud Integration
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\ProvidersCreateRequest $request,
		?string $forwarded = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/cloud/providers', \FoundryCo\Cloudflare\Responses\ProvidersCreate::class, $request);
	}


	/**
	 * Run Discovery for All Integrations
	 */
	public function discover(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/cloud/providers/discover', null, null);
	}


	/**
	 * Read Cloud Integration
	 */
	public function get(string $providerId, ?bool $status = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/cloud/providers/' . $providerId, \FoundryCo\Cloudflare\Responses\ProvidersRead::class, ['status' => $status ?? null]);
	}


	/**
	 * Update Cloud Integration
	 */
	public function update(string $providerId, \FoundryCo\Cloudflare\Requests\ProvidersUpdateRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/cloud/providers/' . $providerId, \FoundryCo\Cloudflare\Responses\ProvidersUpdate::class, $request);
	}


	/**
	 * Patch Cloud Integration
	 */
	public function providers(string $providerId, \FoundryCo\Cloudflare\Requests\ProvidersPatchRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/cloud/providers/' . $providerId, \FoundryCo\Cloudflare\Responses\ProvidersPatch::class, $request);
	}


	/**
	 * Delete Cloud Integration
	 */
	public function delete(string $providerId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/cloud/providers/' . $providerId);
	}


	/**
	 * Run Discovery
	 */
	public function providersDiscover(string $providerId, ?bool $v2 = null): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/cloud/providers/' . $providerId . '/discover', null, null);
	}


	/**
	 * Get Cloud Integration Setup Config
	 */
	public function initialSetup(string $providerId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/cloud/providers/' . $providerId . '/initial_setup', null, []);
	}
}
