<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\ImageRegistriesListImageRegistries
	{
		return $this->client->get('/accounts/' . $this->accountId . '/containers/registries', \FoundryCo\Cloudflare\Responses\ImageRegistriesListImageRegistries::class, []);
	}


	/**
	 * Add a new image registry configuration
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\CreateImageRegistryRequest $request,
	): \FoundryCo\Cloudflare\Responses\ImageRegistriesCreateImageRegistry
	{
		return $this->client->post('/accounts/' . $this->accountId . '/containers/registries', \FoundryCo\Cloudflare\Responses\ImageRegistriesCreateImageRegistry::class, $request);
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
	): \FoundryCo\Cloudflare\Responses\ImageRegistriesGenerateImageRegistryCredentials
	{
		return $this->client->post('/accounts/' . $this->accountId . '/containers/registries/' . $domain . '/credentials', \FoundryCo\Cloudflare\Responses\ImageRegistriesGenerateImageRegistryCredentials::class, $request);
	}
}
