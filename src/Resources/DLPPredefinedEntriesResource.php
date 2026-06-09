<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DLPPredefinedEntriesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Create predefined entry
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\DlpEntriesCreatePredefinedEntryRequest $request,
	): \FoundryCo\Cloudflare\Responses\DLPPredefinedEntriesEntry
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dlp/entries/predefined', \FoundryCo\Cloudflare\Responses\DLPPredefinedEntriesEntry::class, $request);
	}


	/**
	 * Delete predefined entry
	 */
	public function delete(string $entryId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dlp/entries/predefined/' . $entryId);
	}
}
