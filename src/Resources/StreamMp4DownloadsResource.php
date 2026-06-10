<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class StreamMp4DownloadsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List downloads
	 */
	public function get(string $identifier): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/stream/' . $identifier . '/downloads', \FoundryCo\Cloudflare\Responses\StreamMP4DownloadsListDownloads::class, []);
	}


	/**
	 * Create downloads
	 */
	public function create(string $identifier): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/stream/' . $identifier . '/downloads', \FoundryCo\Cloudflare\Responses\StreamMP4DownloadsCreateDownloads::class, null);
	}


	/**
	 * Delete downloads
	 */
	public function delete(string $identifier): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/stream/' . $identifier . '/downloads');
	}


	/**
	 * Create download
	 */
	public function downloads(
		string $identifier,
		\FoundryCo\Cloudflare\Enums\StreamMP4DownloadsDownloadType $downloadType,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/stream/' . $identifier . '/downloads/' . $downloadType, \FoundryCo\Cloudflare\Responses\StreamDownloadsCreateTypeSpecificDownloads::class, null);
	}


	/**
	 * Delete download
	 */
	public function streamDownloadsDeleteTypeSpecificDownloads(
		string $identifier,
		\FoundryCo\Cloudflare\Enums\StreamMP4DownloadsDownloadType $downloadType,
	): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/stream/' . $identifier . '/downloads/' . $downloadType);
	}
}
