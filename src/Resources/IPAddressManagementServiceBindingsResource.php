<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class IPAddressManagementServiceBindingsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Service Bindings
	 */
	public function get(string $prefixId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/addressing/prefixes/' . $prefixId . '/bindings', \FoundryCo\Cloudflare\Responses\IpAddressManagementServiceBindingsListServiceBindings::class, []);
	}


	/**
	 * Create Service Binding
	 */
	public function create(
		string $prefixId,
		\FoundryCo\Cloudflare\Requests\IpAddressManagementServiceBindingsCreateServiceBindingRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/addressing/prefixes/' . $prefixId . '/bindings', \FoundryCo\Cloudflare\Responses\IpAddressManagementServiceBindingsCreateServiceBinding::class, $request);
	}


	/**
	 * Get Service Binding
	 */
	public function bindings(string $prefixId, string $bindingId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/addressing/prefixes/' . $prefixId . '/bindings/' . $bindingId, \FoundryCo\Cloudflare\Responses\IpAddressManagementServiceBindingsGetServiceBinding::class, []);
	}


	/**
	 * Delete Service Binding
	 */
	public function delete(string $prefixId, string $bindingId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/addressing/prefixes/' . $prefixId . '/bindings/' . $bindingId);
	}


	/**
	 * List Services
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/addressing/services', \FoundryCo\Cloudflare\Responses\IpAddressManagementServiceBindingsListServices::class, []);
	}
}
