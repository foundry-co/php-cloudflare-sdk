<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DLPEntriesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List all entries
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/entries', \FoundryCo\Cloudflare\Responses\DlpEntriesListAllEntries::class, []);
	}


	/**
	 * Create custom entry
	 */
	public function create(\FoundryCo\Cloudflare\Requests\DlpEntriesCreateEntryRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/entries', \FoundryCo\Cloudflare\Responses\DlpEntriesCreateEntry::class, $request);
	}


	/**
	 * Update custom entry
	 */
	public function update(
		string $entryId,
		\FoundryCo\Cloudflare\Requests\DlpEntriesUpdateCustomEntryRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/entries/custom/' . $entryId, \FoundryCo\Cloudflare\Responses\DlpEntriesUpdateCustomEntry::class, $request);
	}


	/**
	 * Update predefined entry
	 */
	public function predefined(
		string $entryId,
		\FoundryCo\Cloudflare\Requests\DlpEntriesUpdatePredefinedEntryRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/entries/predefined/' . $entryId, \FoundryCo\Cloudflare\Responses\DlpEntriesUpdatePredefinedEntry::class, $request);
	}


	/**
	 * Get DLP Entry
	 */
	public function get(string $entryId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/entries/' . $entryId, \FoundryCo\Cloudflare\Responses\DlpEntriesGetDlpEntry::class, []);
	}


	/**
	 * Update entry
	 */
	public function entries(string $entryId, \FoundryCo\Cloudflare\Requests\DlpEntriesUpdateEntryRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/entries/' . $entryId, null, $request);
	}


	/**
	 * Delete custom entry
	 */
	public function delete(string $entryId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dlp/entries/' . $entryId);
	}
}
