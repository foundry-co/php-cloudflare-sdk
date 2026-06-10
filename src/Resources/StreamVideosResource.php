<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class StreamVideosResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List videos
	 */
	public function list(
		?\FoundryCo\Cloudflare\Enums\StreamVideosStatus $status = null,
		?string $creator = null,
		?string $type = null,
		?bool $asc = null,
		?string $videoName = null,
		?string $search = null,
		?\DateTimeImmutable $start = null,
		?\DateTimeImmutable $end = null,
		?bool $includeCounts = null,
		?string $id = null,
		?string $name = null,
		?string $liveInputId = null,
		?\DateTimeImmutable $before = null,
		?\DateTimeImmutable $after = null,
		?int $limit = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/stream', \FoundryCo\Cloudflare\Responses\StreamVideosListVideos::class, ['status' => $status ?? null, 'creator' => $creator ?? null, 'type' => $type ?? null, 'asc' => $asc ?? null, 'videoName' => $videoName ?? null, 'search' => $search ?? null, 'start' => $start ?? null, 'end' => $end ?? null, 'includeCounts' => $includeCounts ?? null, 'id' => $id ?? null, 'name' => $name ?? null, 'liveInputId' => $liveInputId ?? null, 'before' => $before ?? null, 'after' => $after ?? null, 'limit' => $limit ?? null]);
	}


	/**
	 * Initiate video uploads using TUS
	 */
	public function create(
		?\FoundryCo\Cloudflare\Enums\StreamVideosTusResumable $tusResumable = null,
		?string $uploadCreator = null,
		?int $uploadLength = null,
		?string $uploadMetadata = null,
		?bool $directUser = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/stream', null, null);
	}


	/**
	 * Upload videos from a URL
	 */
	public function copy(
		\FoundryCo\Cloudflare\Requests\StreamVideosUploadVideosFromAUrlRequest $request,
		?string $uploadCreator = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/stream/copy', \FoundryCo\Cloudflare\Responses\StreamVideosUploadVideosFromAUrl::class, $request);
	}


	/**
	 * Upload videos via direct upload URLs
	 */
	public function directUpload(
		\FoundryCo\Cloudflare\Requests\StreamVideosUploadVideosViaDirectUploadUrLsRequest $request,
		?string $uploadCreator = null,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/stream/direct_upload', \FoundryCo\Cloudflare\Responses\StreamVideosUploadVideosViaDirectUploadUrLs::class, $request);
	}


	/**
	 * Storage use
	 */
	public function storageUsage(?string $creator = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/stream/storage-usage', \FoundryCo\Cloudflare\Responses\StreamVideosStorageUsage::class, ['creator' => $creator ?? null]);
	}


	/**
	 * Retrieve video details
	 */
	public function get(string $identifier): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/stream/' . $identifier, \FoundryCo\Cloudflare\Responses\StreamVideosRetrieveVideoDetails::class, []);
	}


	/**
	 * Edit video details
	 */
	public function stream(
		string $identifier,
		\FoundryCo\Cloudflare\Requests\StreamVideosUpdateVideoDetailsRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/stream/' . $identifier, \FoundryCo\Cloudflare\Responses\StreamVideosUpdateVideoDetails::class, $request);
	}


	/**
	 * Delete video
	 */
	public function delete(string $identifier): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/stream/' . $identifier);
	}


	/**
	 * Retrieve embed Code HTML
	 */
	public function embed(string $identifier): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/stream/' . $identifier . '/embed', null, []);
	}


	/**
	 * Create signed URL tokens for videos
	 */
	public function token(
		string $identifier,
		\FoundryCo\Cloudflare\Requests\StreamVideosCreateSignedUrlTokensForVideosRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/stream/' . $identifier . '/token', \FoundryCo\Cloudflare\Responses\StreamVideosCreateSignedUrlTokensForVideos::class, $request);
	}
}
