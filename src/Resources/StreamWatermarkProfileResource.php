<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class StreamWatermarkProfileResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List watermark profiles
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/stream/watermarks', \FoundryCo\Cloudflare\Responses\StreamWatermarkProfileListWatermarkProfiles::class, []);
	}


	/**
	 * Create watermark profiles via basic upload
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\StreamWatermarkProfileCreateWatermarkProfilesViaBasicUploadRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/stream/watermarks', \FoundryCo\Cloudflare\Responses\StreamWatermarkProfileCreateWatermarkProfilesViaBasicUpload::class, $request);
	}


	/**
	 * Watermark profile details
	 */
	public function get(string $identifier): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/stream/watermarks/' . $identifier, \FoundryCo\Cloudflare\Responses\StreamWatermarkProfileWatermarkProfileDetails::class, []);
	}


	/**
	 * Delete watermark profiles
	 */
	public function delete(string $identifier): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/stream/watermarks/' . $identifier);
	}
}
