<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function create(
		\FoundryCo\Cloudflare\Requests\CloudflareImagesVariantsCreateAVariantRequest $request,
	): \FoundryCo\Cloudflare\Responses\CloudflareImagesVariantsVariant
	{
		return $this->client->post('/accounts/' . $this->accountId . '/images/v1/variants', \FoundryCo\Cloudflare\Responses\CloudflareImagesVariantsVariant::class, $request);
	}


	/**
	 * Variant details
	 */
	public function get(string $variantId): \FoundryCo\Cloudflare\Responses\CloudflareImagesVariantsDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/images/v1/variants/' . $variantId, \FoundryCo\Cloudflare\Responses\CloudflareImagesVariantsDetails::class, []);
	}


	/**
	 * Update a variant
	 */
	public function update(
		string $variantId,
		\FoundryCo\Cloudflare\Requests\CloudflareImagesVariantsUpdateAVariantRequest $request,
	): \FoundryCo\Cloudflare\Responses\CloudflareImagesVariantsVariant
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/images/v1/variants/' . $variantId, \FoundryCo\Cloudflare\Responses\CloudflareImagesVariantsVariant::class, $request);
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
	public function flat(string $variantId): \FoundryCo\Cloudflare\Responses\CloudflareImagesVariantsFlat
	{
		return $this->client->get('/accounts/' . $this->accountId . '/images/v1/variants/' . $variantId . '/flat', \FoundryCo\Cloudflare\Responses\CloudflareImagesVariantsFlat::class, []);
	}
}
