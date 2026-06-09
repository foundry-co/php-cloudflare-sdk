<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SharedResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Create a sharable link to a query result
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\SharedquerypostRequest $request,
	): \FoundryCo\Cloudflare\Responses\SharedSharedquerypost
	{
		return $this->client->post('/accounts/' . $this->accountId . '/workers/observability/shared/query', \FoundryCo\Cloudflare\Responses\SharedSharedquerypost::class, $request);
	}


	/**
	 * View a query that has been shared
	 */
	public function get(
		string $id,
		?\FoundryCo\Cloudflare\Enums\SharedView $view = null,
	): \FoundryCo\Cloudflare\Responses\SharedSharedqueryget
	{
		return $this->client->get('/accounts/' . $this->accountId . '/workers/observability/shared/query/' . $id, \FoundryCo\Cloudflare\Responses\SharedSharedqueryget::class, ['view' => $view ?? null]);
	}
}
