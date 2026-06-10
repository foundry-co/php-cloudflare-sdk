<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class BindbResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Posts a file to Binary Storage
	 */
	public function create(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/binary', null, null);
	}


	/**
	 * Retrieves a file from Binary Storage
	 */
	public function get(string $hash): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/binary/' . $hash, null, []);
	}
}
