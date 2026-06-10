<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AutoragRAGSearchResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * AI Search
	 */
	public function create(string $id, \FoundryCo\Cloudflare\Requests\AutoragConfigAiSearchRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/autorag/rags/' . $id . '/ai-search', \FoundryCo\Cloudflare\Responses\AutoragConfigAiSearch::class, $request);
	}


	/**
	 * Search
	 */
	public function search(string $id, \FoundryCo\Cloudflare\Requests\AutoragConfigSearchRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/autorag/rags/' . $id . '/search', \FoundryCo\Cloudflare\Responses\AutoragConfigSearch::class, $request);
	}
}
