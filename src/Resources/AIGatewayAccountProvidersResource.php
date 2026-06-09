<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AIGatewayAccountProvidersResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Account Providers
	 */
	public function list(
		?int $page = null,
		?int $perPage = null,
		?bool $beta = null,
		?bool $enable = null,
		?string $search = null,
	): \FoundryCo\Cloudflare\Responses\AIGatewayAccountProvidersProvider
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/custom-providers', \FoundryCo\Cloudflare\Responses\AIGatewayAccountProvidersProvider::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'beta' => $beta ?? null, 'enable' => $enable ?? null, 'search' => $search ?? null]);
	}


	/**
	 * Create a new Account Provider
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\AigConfigCreateAccountProviderRequest $request,
	): \FoundryCo\Cloudflare\Responses\AIGatewayAccountProvidersProvider
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-gateway/custom-providers', \FoundryCo\Cloudflare\Responses\AIGatewayAccountProvidersProvider::class, $request);
	}


	/**
	 * Fetch a Account Provider
	 */
	public function get(string $id): \FoundryCo\Cloudflare\Responses\AIGatewayAccountProvidersProvider
	{
		return $this->client->get('/accounts/' . $this->accountId . '/ai-gateway/custom-providers/' . $id, \FoundryCo\Cloudflare\Responses\AIGatewayAccountProvidersProvider::class, []);
	}


	/**
	 * Update a Account Provider
	 */
	public function update(
		string $id,
		\FoundryCo\Cloudflare\Requests\AigConfigUpdateAccountProviderRequest $request,
	): \FoundryCo\Cloudflare\Responses\AIGatewayAccountProvidersProvider
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/ai-gateway/custom-providers/' . $id, \FoundryCo\Cloudflare\Responses\AIGatewayAccountProvidersProvider::class, $request);
	}


	/**
	 * Delete a Account Provider
	 */
	public function delete(string $id): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/ai-gateway/custom-providers/' . $id);
	}
}
