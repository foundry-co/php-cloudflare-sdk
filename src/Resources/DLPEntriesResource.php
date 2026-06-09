<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\DLPEntriesEntries
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/entries', \FoundryCo\Cloudflare\Responses\DLPEntriesEntries::class, []);
	}


	/**
	 * Create custom entry
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DlpEntriesCreateEntryRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPEntriesEntry
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/entries', \FoundryCo\Cloudflare\Responses\DLPEntriesEntry::class, $request);
	}


	/**
	 * Update custom entry
	 */
	public function update(
		string $entryId,
		\FoundryCo\Cloudflare\Requests\DlpEntriesUpdateCustomEntryRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPEntriesEntry
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/entries/custom/' . $entryId, \FoundryCo\Cloudflare\Responses\DLPEntriesEntry::class, $request);
	}


	/**
	 * Update predefined entry
	 */
	public function predefined(
		string $entryId,
		\FoundryCo\Cloudflare\Requests\DlpEntriesUpdatePredefinedEntryRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPEntriesEntry
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/entries/predefined/' . $entryId, \FoundryCo\Cloudflare\Responses\DLPEntriesEntry::class, $request);
	}


	/**
	 * Get DLP Entry
	 */
	public function get(string $entryId): \FoundryCo\Cloudflare\Responses\DLPEntriesEntry
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dlp/entries/' . $entryId, \FoundryCo\Cloudflare\Responses\DLPEntriesEntry::class, []);
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
