<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class StreamSigningKeysResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List signing keys
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/stream/keys', \FoundryCo\Cloudflare\Responses\StreamSigningKeysListSigningKeys::class, []);
	}


	/**
	 * Create signing keys
	 */
	public function create(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/stream/keys', \FoundryCo\Cloudflare\Responses\StreamSigningKeysCreateSigningKeys::class, null);
	}


	/**
	 * Delete signing keys
	 */
	public function delete(string $identifier): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/stream/keys/' . $identifier);
	}
}
