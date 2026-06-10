<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DomainIntelligenceResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get Domain Details
	 */
	public function list(?string $domain = null, ?bool $skipDns = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/domain', \FoundryCo\Cloudflare\Responses\DomainIntelligenceGetDomainDetails::class, ['domain' => $domain ?? null, 'skipDns' => $skipDns ?? null]);
	}


	/**
	 * Get Multiple Domain Details
	 */
	public function bulk(?array $domain = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/domain/bulk', \FoundryCo\Cloudflare\Responses\DomainIntelligenceGetMultipleDomainDetails::class, ['domain' => $domain ?? null]);
	}
}
