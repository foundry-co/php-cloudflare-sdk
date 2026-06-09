<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class PrefixBindingsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List DLS prefix bindings for an account
	 */
	public function list(
		?string $cursor = null,
		?int $perPage = null,
	): \FoundryCo\Cloudflare\Responses\PrefixBindingsPublicListPrefixBindings
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dls/regional_services/prefix_bindings', \FoundryCo\Cloudflare\Responses\PrefixBindingsPublicListPrefixBindings::class, ['cursor' => $cursor ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create a DLS prefix binding
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\PublicCreatePrefixBindingRequest $request,
	): \FoundryCo\Cloudflare\Responses\PrefixBindingsPublicCreatePrefixBinding
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dls/regional_services/prefix_bindings', \FoundryCo\Cloudflare\Responses\PrefixBindingsPublicCreatePrefixBinding::class, $request);
	}


	/**
	 * Get a DLS prefix binding
	 */
	public function get(string $bindingId): \FoundryCo\Cloudflare\Responses\PrefixBindingsPublicGetPrefixBinding
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dls/regional_services/prefix_bindings/' . $bindingId, \FoundryCo\Cloudflare\Responses\PrefixBindingsPublicGetPrefixBinding::class, []);
	}


	/**
	 * Update a DLS prefix binding
	 */
	public function update(
		string $bindingId,
		\FoundryCo\Cloudflare\Requests\PublicPatchPrefixBindingRequest $request,
	): \FoundryCo\Cloudflare\Responses\PrefixBindingsPublicPatchPrefixBinding
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/dls/regional_services/prefix_bindings/' . $bindingId, \FoundryCo\Cloudflare\Responses\PrefixBindingsPublicPatchPrefixBinding::class, $request);
	}


	/**
	 * Delete a DLS prefix binding
	 */
	public function delete(string $bindingId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dls/regional_services/prefix_bindings/' . $bindingId);
	}
}
