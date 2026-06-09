<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class R2ObjectResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Objects
	 */
	public function get(
		string $bucketName,
		?\FoundryCo\Cloudflare\Enums\R2ObjectCfR2Jurisdiction $cfR2Jurisdiction = null,
		?int $perPage = null,
		?string $prefix = null,
		?string $delimiter = null,
		?string $cursor = null,
		?string $startAfter = null,
	): \FoundryCo\Cloudflare\Responses\R2ObjectObjects
	{
		return $this->client->get('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName . '/objects', \FoundryCo\Cloudflare\Responses\R2ObjectObjects::class, ['cfR2Jurisdiction' => $cfR2Jurisdiction ?? null, 'perPage' => $perPage ?? null, 'prefix' => $prefix ?? null, 'delimiter' => $delimiter ?? null, 'cursor' => $cursor ?? null, 'startAfter' => $startAfter ?? null]);
	}


	/**
	 * Delete Objects
	 */
	public function delete(
		string $bucketName,
		?\FoundryCo\Cloudflare\Enums\R2ObjectCfR2Jurisdiction $cfR2Jurisdiction = null,
		?string $prefix = null,
	): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName . '/objects');
	}


	/**
	 * Get Object
	 */
	public function objects(
		string $bucketName,
		string $objectKey,
		?\FoundryCo\Cloudflare\Enums\R2ObjectCfR2Jurisdiction $cfR2Jurisdiction = null,
		?string $ifNoneMatch = null,
		?string $ifModifiedSince = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName . '/objects/' . $objectKey, null, ['cfR2Jurisdiction' => $cfR2Jurisdiction ?? null, 'ifNoneMatch' => $ifNoneMatch ?? null, 'ifModifiedSince' => $ifModifiedSince ?? null]);
	}


	/**
	 * Upload Object
	 */
	public function update(
		string $bucketName,
		string $objectKey,
		?\FoundryCo\Cloudflare\Enums\R2ObjectCfR2Jurisdiction $cfR2Jurisdiction = null,
		?string $contentType = null,
		?int $contentLength = null,
		?\FoundryCo\Cloudflare\Enums\R2ObjectCfR2StorageClass $cfR2StorageClass = null,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName . '/objects/' . $objectKey, null, null);
	}


	/**
	 * Delete Object
	 */
	public function r2DeleteObject(
		string $bucketName,
		string $objectKey,
		?\FoundryCo\Cloudflare\Enums\R2ObjectCfR2Jurisdiction $cfR2Jurisdiction = null,
	): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/r2/buckets/' . $bucketName . '/objects/' . $objectKey);
	}
}
