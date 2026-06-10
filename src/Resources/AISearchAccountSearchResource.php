<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AISearchAccountSearchResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Multi-Instance Chat Completions
	 */
	public function create(
		string $name,
		\FoundryCo\Cloudflare\Requests\AiSearchNamespaceMultiInstanceChatCompletionRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/chat/completions', null, $request);
	}


	/**
	 * Multi-Instance Search
	 */
	public function search(
		string $name,
		\FoundryCo\Cloudflare\Requests\AiSearchNamespaceMultiInstanceSearchRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/ai-search/namespaces/' . $name . '/search', \FoundryCo\Cloudflare\Responses\AiSearchNamespaceMultiInstanceSearch::class, $request);
	}
}
