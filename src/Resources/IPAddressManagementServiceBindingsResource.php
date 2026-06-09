<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function get(string $prefixId): \FoundryCo\Cloudflare\Responses\IPAddressManagementServiceBindingsBindings
	{
		return $this->client->get('/accounts/' . $this->accountId . '/addressing/prefixes/' . $prefixId . '/bindings', \FoundryCo\Cloudflare\Responses\IPAddressManagementServiceBindingsBindings::class, []);
	}


	/**
	 * Create Service Binding
	 */
	public function create(
		string $prefixId,
		\FoundryCo\Cloudflare\Requests\IpAddressManagementServiceBindingsCreateServiceBindingRequest $request,
	): \FoundryCo\Cloudflare\Responses\IPAddressManagementServiceBindingsBinding
	{
		return $this->client->post('/accounts/' . $this->accountId . '/addressing/prefixes/' . $prefixId . '/bindings', \FoundryCo\Cloudflare\Responses\IPAddressManagementServiceBindingsBinding::class, $request);
	}


	/**
	 * Get Service Binding
	 */
	public function bindings(
		string $prefixId,
		string $bindingId,
	): \FoundryCo\Cloudflare\Responses\IPAddressManagementServiceBindingsBinding
	{
		return $this->client->get('/accounts/' . $this->accountId . '/addressing/prefixes/' . $prefixId . '/bindings/' . $bindingId, \FoundryCo\Cloudflare\Responses\IPAddressManagementServiceBindingsBinding::class, []);
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
	public function list(): \FoundryCo\Cloudflare\Responses\IPAddressManagementServiceBindingsServices
	{
		return $this->client->get('/accounts/' . $this->accountId . '/addressing/services', \FoundryCo\Cloudflare\Responses\IPAddressManagementServiceBindingsServices::class, []);
	}
}
