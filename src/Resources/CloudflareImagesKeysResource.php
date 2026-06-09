<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CloudflareImagesKeysResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Signing Keys
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/images/v1/keys', null, []);
	}


	/**
	 * Create a new Signing Key
	 */
	public function update(string $signingKeyName): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/images/v1/keys/' . $signingKeyName, null, null);
	}


	/**
	 * Delete Signing Key
	 */
	public function delete(string $signingKeyName): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/images/v1/keys/' . $signingKeyName);
	}
}
