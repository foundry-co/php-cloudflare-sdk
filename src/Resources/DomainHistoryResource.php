<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DomainHistoryResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get Domain History
	 */
	public function list(?string $domain = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/domain-history', \FoundryCo\Cloudflare\Responses\DomainHistoryGetDomainHistory::class, ['domain' => $domain ?? null]);
	}
}
