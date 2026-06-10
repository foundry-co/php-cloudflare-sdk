<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CloudflareImagesVariantsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List variants
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/images/v1/variants', null, []);
	}


	/**
	 * Create a variant
	 */
	public function create(\FoundryCo\Cloudflare\Requests\CloudflareImagesVariantsCreateAVariantRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/images/v1/variants', \FoundryCo\Cloudflare\Responses\CloudflareImagesVariantsCreateAVariant::class, $request);
	}


	/**
	 * Variant details
	 */
	public function get(string $variantId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/images/v1/variants/' . $variantId, \FoundryCo\Cloudflare\Responses\CloudflareImagesVariantsVariantDetails::class, []);
	}


	/**
	 * Update a variant
	 */
	public function update(
		string $variantId,
		\FoundryCo\Cloudflare\Requests\CloudflareImagesVariantsUpdateAVariantRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/images/v1/variants/' . $variantId, \FoundryCo\Cloudflare\Responses\CloudflareImagesVariantsUpdateAVariant::class, $request);
	}


	/**
	 * Delete a variant
	 */
	public function delete(string $variantId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/images/v1/variants/' . $variantId);
	}


	/**
	 * Variant details (flat)
	 */
	public function flat(string $variantId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/images/v1/variants/' . $variantId . '/flat', \FoundryCo\Cloudflare\Responses\CloudflareImagesVariantsVariantDetailsFlat::class, []);
	}
}
