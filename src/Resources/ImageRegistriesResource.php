<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ImageRegistriesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get the list of configured registries in the account
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/containers/registries', \FoundryCo\Cloudflare\Responses\ListImageRegistries::class, []);
	}


	/**
	 * Add a new image registry configuration
	 */
	public function create(\FoundryCo\Cloudflare\Requests\CreateImageRegistryRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/containers/registries', \FoundryCo\Cloudflare\Responses\CreateImageRegistry::class, $request);
	}


	/**
	 * Delete a registry from the account
	 */
	public function delete(string $domain): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/containers/registries/' . $domain);
	}


	/**
	 * Generate a JWT to interact with the specified image registry.
	 */
	public function credentials(
		string $domain,
		\FoundryCo\Cloudflare\Requests\GenerateImageRegistryCredentialsRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/containers/registries/' . $domain . '/credentials', \FoundryCo\Cloudflare\Responses\GenerateImageRegistryCredentials::class, $request);
	}
}
