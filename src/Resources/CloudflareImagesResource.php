<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function create(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/images/v1', \FoundryCo\Cloudflare\Responses\CloudflareImagesUploadAnImageViaUrl::class, null);
	}


	/**
	 * Images usage statistics
	 */
	public function stats(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/images/v1/stats', \FoundryCo\Cloudflare\Responses\CloudflareImagesImagesUsageStatistics::class, []);
	}


	/**
	 * Image details
	 */
	public function get(string $imageId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/images/v1/' . $imageId, \FoundryCo\Cloudflare\Responses\CloudflareImagesImageDetails::class, []);
	}


	/**
	 * Update image
	 */
	public function update(
		string $imageId,
		\FoundryCo\Cloudflare\Requests\CloudflareImagesUpdateImageRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/images/v1/' . $imageId, \FoundryCo\Cloudflare\Responses\CloudflareImagesUpdateImage::class, $request);
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
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/images/v2', \FoundryCo\Cloudflare\Responses\CloudflareImagesListImagesV2::class, ['continuationToken' => $continuationToken ?? null, 'perPage' => $perPage ?? null, 'sortOrder' => $sortOrder ?? null, 'creator' => $creator ?? null, 'metafieldoperator' => $metafieldoperator ?? null]);
	}


	/**
	 * Create authenticated direct upload URL V2
	 */
	public function directUpload(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/images/v2/direct_upload', \FoundryCo\Cloudflare\Responses\CloudflareImagesCreateAuthenticatedDirectUploadUrlV2::class, null);
	}
}
