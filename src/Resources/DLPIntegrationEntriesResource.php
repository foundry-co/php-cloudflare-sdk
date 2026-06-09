<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DLPIntegrationEntriesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Create integration entry
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DlpEntriesCreateIntegrationEntryRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPIntegrationEntriesEntry
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/entries/integration', \FoundryCo\Cloudflare\Responses\DLPIntegrationEntriesEntry::class, $request);
	}


	/**
	 * Update integration entry
	 */
	public function update(
		string $entryId,
		\FoundryCo\Cloudflare\Requests\DlpEntriesUpdateIntegrationEntryRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPIntegrationEntriesEntry
	{
		return $this->client->put('/accounts/' . $this->accountId . '/dlp/entries/integration/' . $entryId, \FoundryCo\Cloudflare\Responses\DLPIntegrationEntriesEntry::class, $request);
	}


	/**
	 * Delete integration entry
	 */
	public function delete(string $entryId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dlp/entries/integration/' . $entryId);
	}
}
