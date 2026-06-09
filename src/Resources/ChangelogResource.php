<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ChangelogResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get flag changelog
	 */
	public function get(string $appId, string $flagKey, ?string $limit = null, ?string $cursor = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/flagship/apps/' . $appId . '/flags/' . $flagKey . '/changelog', null, ['limit' => $limit ?? null, 'cursor' => $cursor ?? null]);
	}
}
