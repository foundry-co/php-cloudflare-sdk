<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CloudflareImagesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List images
	 */
	public function list(?float $page = null, ?float $perPage = null, ?string $creator = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/images/v1', null, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'creator' => $creator ?? null]);
	}


	/**
	 * Upload an image
	 */
	public function create(): \FoundryCo\Cloudflare\Responses\CloudflareImagesUrl
	{
		return $this->client->post('/accounts/' . $this->accountId . '/images/v1', \FoundryCo\Cloudflare\Responses\CloudflareImagesUrl::class, null);
	}


	/**
	 * Images usage statistics
	 */
	public function stats(): \FoundryCo\Cloudflare\Responses\CloudflareImagesStatistics
	{
		return $this->client->get('/accounts/' . $this->accountId . '/images/v1/stats', \FoundryCo\Cloudflare\Responses\CloudflareImagesStatistics::class, []);
	}


	/**
	 * Image details
	 */
	public function get(string $imageId): \FoundryCo\Cloudflare\Responses\CloudflareImagesDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/images/v1/' . $imageId, \FoundryCo\Cloudflare\Responses\CloudflareImagesDetails::class, []);
	}


	/**
	 * Update image
	 */
	public function update(
		string $imageId,
		\FoundryCo\Cloudflare\Requests\CloudflareImagesUpdateImageRequest $request,
	): \FoundryCo\Cloudflare\Responses\CloudflareImagesImage
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/images/v1/' . $imageId, \FoundryCo\Cloudflare\Responses\CloudflareImagesImage::class, $request);
	}


	/**
	 * Delete image
	 */
	public function delete(string $imageId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/images/v1/' . $imageId);
	}


	/**
	 * Base image
	 */
	public function blob(string $imageId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/images/v1/' . $imageId . '/blob', null, []);
	}


	/**
	 * List images V2
	 */
	public function v2(
		?string $continuationToken = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\CloudflareImagesSortOrder $sortOrder = null,
		?string $creator = null,
		?string $metafieldoperator = null,
	): \FoundryCo\Cloudflare\Responses\CloudflareImagesV2
	{
		return $this->client->get('/accounts/' . $this->accountId . '/images/v2', \FoundryCo\Cloudflare\Responses\CloudflareImagesV2::class, ['continuationToken' => $continuationToken ?? null, 'perPage' => $perPage ?? null, 'sortOrder' => $sortOrder ?? null, 'creator' => $creator ?? null, 'metafieldoperator' => $metafieldoperator ?? null]);
	}


	/**
	 * Create authenticated direct upload URL V2
	 */
	public function directUpload(): \FoundryCo\Cloudflare\Responses\CloudflareImages2
	{
		return $this->client->post('/accounts/' . $this->accountId . '/images/v2/direct_upload', \FoundryCo\Cloudflare\Responses\CloudflareImages2::class, null);
	}
}
