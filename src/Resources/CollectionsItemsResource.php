<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class CollectionsItemsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Create item(s)
	 */
	public function create(string $collectionId): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections/' . $collectionId . '/items', null, null);
	}


	/**
	 * Search items (advanced filtering)
	 */
	public function search(string $collectionId, \FoundryCo\Cloudflare\Requests\PostItemSearchRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/v2/collections/' . $collectionId . '/search', \FoundryCo\Cloudflare\Responses\PostItemSearch::class, $request);
	}
}
