<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CredentialManagementResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Store catalog credentials
	 */
	public function create(string $bucketName, \FoundryCo\Cloudflare\Requests\StoreCredentialsRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/r2-catalog/' . $bucketName . '/credential', null, $request);
	}
}
