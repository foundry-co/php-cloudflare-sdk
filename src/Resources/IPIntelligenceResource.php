<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class IPIntelligenceResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get IP Overview
	 */
	public function list(
		?string $ipv4 = null,
		?string $ipv6 = null,
	): \FoundryCo\Cloudflare\Responses\IPIntelligenceOverview
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/ip', \FoundryCo\Cloudflare\Responses\IPIntelligenceOverview::class, ['ipv4' => $ipv4 ?? null, 'ipv6' => $ipv6 ?? null]);
	}
}
