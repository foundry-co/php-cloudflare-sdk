<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class URLIntelligenceResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get URL Intelligence
	 */
	public function list(?string $url = null): \FoundryCo\Cloudflare\Responses\URLIntelligenceIntelligence
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/url', \FoundryCo\Cloudflare\Responses\URLIntelligenceIntelligence::class, ['url' => $url ?? null]);
	}
}
