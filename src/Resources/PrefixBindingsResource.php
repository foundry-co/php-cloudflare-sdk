<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(?string $cursor = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dls/regional_services/prefix_bindings', \FoundryCo\Cloudflare\Responses\PublicListPrefixBindings::class, ['cursor' => $cursor ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create a DLS prefix binding
	 */
	public function create(\FoundryCo\Cloudflare\Requests\PublicCreatePrefixBindingRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dls/regional_services/prefix_bindings', \FoundryCo\Cloudflare\Responses\PublicCreatePrefixBinding::class, $request);
	}


	/**
	 * Get a DLS prefix binding
	 */
	public function get(string $bindingId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dls/regional_services/prefix_bindings/' . $bindingId, \FoundryCo\Cloudflare\Responses\PublicGetPrefixBinding::class, []);
	}


	/**
	 * Update a DLS prefix binding
	 */
	public function update(
		string $bindingId,
		\FoundryCo\Cloudflare\Requests\PublicPatchPrefixBindingRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/dls/regional_services/prefix_bindings/' . $bindingId, \FoundryCo\Cloudflare\Responses\PublicPatchPrefixBinding::class, $request);
	}


	/**
	 * Delete a DLS prefix binding
	 */
	public function delete(string $bindingId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dls/regional_services/prefix_bindings/' . $bindingId);
	}
}
