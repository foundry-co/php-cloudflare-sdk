<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function get(string $identifier): \FoundryCo\Cloudflare\Responses\StreamMP4DownloadsDownloads
	{
		return $this->client->get('/accounts/' . $this->accountId . '/stream/' . $identifier . '/downloads', \FoundryCo\Cloudflare\Responses\StreamMP4DownloadsDownloads::class, []);
	}


	/**
	 * Create downloads
	 */
	public function create(string $identifier): \FoundryCo\Cloudflare\Responses\StreamMP4DownloadsDownloads
	{
		return $this->client->post('/accounts/' . $this->accountId . '/stream/' . $identifier . '/downloads', \FoundryCo\Cloudflare\Responses\StreamMP4DownloadsDownloads::class, null);
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
	): \FoundryCo\Cloudflare\Responses\StreamMP4DownloadsDownloads
	{
		return $this->client->post('/accounts/' . $this->accountId . '/stream/' . $identifier . '/downloads/' . $downloadType, \FoundryCo\Cloudflare\Responses\StreamMP4DownloadsDownloads::class, null);
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
